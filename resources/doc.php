BLAST stands for 'Basic Local Alignment Search Tool', which was first described by Altschul et al in 1990 [1]. It was further enhanced to perform gapped local alignment (version 2.0) in 1997 [2]. Using the BLAST engine, NCBI has been providing sequence alignment services since 1991, initially through an email server (decommissioned in 2001) and later through its web server (since 1995).

The URLAPI is a protocol for end users to interact with a web service using the commands encoded within a URL. The BLAST URLAPI from NCBI, previously known as QBlAst, allows users to submit BLAST search requests using URL encoded commands and parameters. 

BLAST search requests, submited by end users through the BLAST URLAPI by way of browser or script, interact with splitd system through Blast.cgi. Each individual search request consists of two distinctive steps.

The first step is a 'Put', which pushes a search request with appropriate option settings into the system. A successful 'Put' step receives a Request ID (RID) in return, which uniquely identifies that search.

The second step is 'Get', which retrieves the result for a completed search with its assigned RID. For a given search, its result can be presented in one of the available formats as specified by the options settings.

Using the RID, a user can retrieve the result for a search in different formats, to highlight different features of the alignment. Sections below provide details and example URLs on submitting BLAST searches using the BLAST URLAPI .

Documentation link