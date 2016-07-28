<?
$subject_val = "[OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 10:36:27 2011" -->
<!-- isoreceived="20110105153627" -->
<!-- sent="Wed, 05 Jan 2011 16:36:20 +0100" -->
<!-- isosent="20110105153620" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="[OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name" -->
<!-- id="4D248FF4.5030005_at_cea.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 10:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15272.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15270.php">Hicham Mouline: "[OMPI users] IRC channel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15278.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>What are the changes between openMPI 1.4.1 and 1.5.1 about MPI2 service 
<br>
of publishing name.
<br>
I have 2 programs which connect them via MPI_Publish_name and 
<br>
MPI_Lookup_name subroutines and ompi-server.
<br>
That's OK with 1.4.1 version , but I have a deadlock with 1.5.1 version 
<br>
inside the subroutine MPI_Publish_name and MPI_Lookup_name.
<br>
<p>best
<br>
Bernard
<br>
<p>That's my connection subroutine:
<br>
<p><p>MPI_Comm remoteConnect(int myrank, int *srv, char *port_name, char* service)
<br>
{
<br>
&nbsp;&nbsp;int clt=0;
<br>
&nbsp;&nbsp;MPI_Request request; /* requete pour communication non bloquante */
<br>
&nbsp;&nbsp;MPI_Comm gcom;
<br>
&nbsp;&nbsp;MPI_Status status; 
<br>
&nbsp;&nbsp;char   port_name_clt[MPI_MAX_PORT_NAME]; 
<br>
<p>&nbsp;&nbsp;if( service == NULL ) service = defaultService;
<br>
<p>&nbsp;&nbsp;/* only process of rank null can publish name */
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;/* A lookup for an unpublished service generate an error */
<br>
&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;if( myrank == 0 ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Try to be a server. If there service is already published, try to be a cient */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] Publish name\n&quot;,myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI_Publish_name(service, MPI_INFO_NULL, port_name) == MPI_SUCCESS )  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*srv = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] service %s available at %s\n&quot;,myrank,service,port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Close_port( port_name ); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Throw exception */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] Error\n&quot;,myrank);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Waiting rank 0 publish name */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] Lookup name\n&quot;,myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Throw exception */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Bcast(srv,1,MPI_INT,0,MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if ( *srv )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* I am the Master */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom );
<br>
&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/*  Connect to service SERVER, get the inter-communicator server*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI_Comm_connect(port_name_clt, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom )  == MPI_SUCCESS )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] I get the connection with %s at %s !\n&quot;,myrank, service, port_name_clt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;if(myrank != 0) *srv = 0;
<br>
<p>&nbsp;&nbsp;return gcom;
<br>
<p>}
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15272.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15270.php">Hicham Mouline: "[OMPI users] IRC channel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15278.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
