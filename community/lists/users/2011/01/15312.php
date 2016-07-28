<?
$subject_val = "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:15:55 2011" -->
<!-- isoreceived="20110107151555" -->
<!-- sent="Fri, 7 Jan 2011 10:15:50 -0500" -->
<!-- isosent="20110107151550" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name" -->
<!-- id="88116BBC-61E3-4F5F-B0C6-B3322B6E0E13_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D26DA45.7090402_at_cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15301.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're calling bcast with root=0, so whatever value rank 0 has for srv, everyone will have after the bcast.  Plus, I didn't see in your code where *srv was ever set to 0.
<br>
<p>In my runs, rank 0 is usually the one that publishes first.  Everyone then gets the lookup properly, and then the bcast sends srv=1 to everyone.  They all then try to call MPI_Comm_accept.
<br>
<p>Your code was incomplete, so I had to extend it; see attached.
<br>
<p>Here's a sample output with 8 procs:
<br>
<p>[7:12] svbu-mpi:~/mpi % mpicc lookup.c -o lookup -g &amp;&amp; mpirun lookup
<br>
[0] Publish name
<br>
[0] service ocean available at 3853516800.0;tcp://172.29.218.140:36685;tcp://10.10.10.140:36685;tcp://10.10.20.140:36685;tcp://10.10.30.140:36685;tcp://172.16.68.1:36685;tcp://172.16.29.1:36685+3853516801.0;tcp://172.29.218.150:34210;tcp://10.10.30.150:34210:300
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
[2] Lookup name
<br>
[6] Lookup name
<br>
[4] Lookup name
<br>
[3] Lookup name
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
[1] Lookup name
<br>
[7] Lookup name
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
[5] Lookup name
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
MPI_Lookup_name succeeded
<br>
Bcast
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
Bcast complete: srv=1
<br>
Server calling MPI_Comm_accept
<br>
[hang -- because everyone's in accept, not connect]
<br>
<p><p><p>On Jan 7, 2011, at 4:17 AM, Bernard Secher - SFME/LGLS wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only the processes of the program where process 0 successed to publish name, have srv=1 and then call MPI_Comm_accept.
</span><br>
<span class="quotelev1">&gt; The processes of the program where process 0 failed to publish name, have srv=0 and then call MPI_Comm_connect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's worked like this with openmpi 1.4.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it different whith openmpi 1.5.1 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Bernard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2011, at 10:36 AM, Bernard Secher - SFME/LGLS wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm remoteConnect(int myrank, int *srv, char *port_name, char* service)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int clt=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Request request; /* requete pour communication non bloquante */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm gcom;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Status status; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char   port_name_clt[MPI_MAX_PORT_NAME]; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if( service == NULL ) service = defaultService;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* only process of rank null can publish name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* A lookup for an unpublished service generate an error */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if( myrank == 0 ){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Try to be a server. If there service is already published, try to be a cient */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Open_port(MPI_INFO_NULL, port_name); 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;[%d] Publish name\n&quot;,myrank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if ( MPI_Publish_name(service, MPI_INFO_NULL, port_name) == MPI_SUCCESS )  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       *srv = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       printf(&quot;[%d] service %s available at %s\n&quot;,myrank,service,port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     else if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI_Close_port( port_name ); 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       clt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* Throw exception */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       printf(&quot;[%d] Error\n&quot;,myrank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Waiting rank 0 publish name */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;[%d] Lookup name\n&quot;,myrank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if ( MPI_Lookup_name(service, MPI_INFO_NULL, port_name_clt) == MPI_SUCCESS ){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       clt = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* Throw exception */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Bcast(srv,1,MPI_INT,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You're broadcasting srv here -- won't everyone now have *srv==1, such that they all call MPI_COMM_ACCEPT, below?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if ( *srv )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* I am the Master */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /*  Connect to service SERVER, get the inter-communicator server*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if ( MPI_Comm_connect(port_name_clt, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;gcom )  == MPI_SUCCESS )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       printf(&quot;[%d] I get the connection with %s at %s !\n&quot;,myrank, service, port_name_clt);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_ARE_FATAL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if(myrank != 0) *srv = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return gcom;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15312/lookup.c">lookup.c</a>
</ul>
<!-- attachment="lookup.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15301.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Reply:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
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
