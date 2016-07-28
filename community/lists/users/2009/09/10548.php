<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 00:07:12 2009" -->
<!-- isoreceived="20090902040712" -->
<!-- sent="Wed, 2 Sep 2009 07:07:07 +0300" -->
<!-- isosent="20090902040707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?" -->
<!-- id="947F8820-DF37-4A90-BB64-B0DFC3E2127D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A9C7F92.9010507_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 00:07:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10530.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2009, at 4:57 AM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; It worked fine.But I have small issue.Following code demonstrates  
</span><br>
<span class="quotelev1">&gt; how I use mpi::intercommunicator.But in the spawned child processes,  
</span><br>
<span class="quotelev1">&gt; the intercommunicator size is same as number of spawned  
</span><br>
<span class="quotelev1">&gt; processes.But it should be 1 ,right?
</span><br>
<span class="quotelev1">&gt; Because,I execute the manager process (manager.cpp) as &quot;mpirun -np 1  
</span><br>
<span class="quotelev1">&gt; manager&quot; .So there should be only one process.
</span><br>
<p>I'm not familiar with the details of Boost.MPI, but when you call  
<br>
MPI_COMM_SPAWN, the resulting intercommunicator will have a remote  
<br>
group size of the number of processes that were spawned and the local  
<br>
group size of the number of processes that invoked MPI_COMM_SPAWN.   
<br>
Hence, in your case (mpirun -np 1 manager), the local group size will  
<br>
be 1 and the remote group size will be 5.
<br>
<p><span class="quotelev1">&gt; manager.cpp (manager process which spawns child processes) - rank 0
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  mpi::environment evn(argc,argv);
</span><br>
<span class="quotelev1">&gt;  mpi::communicator world;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm everyone;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //spawn 5 child processes.
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn(&quot;./worker&quot;, MPI_ARGV_NULL, 5,
</span><br>
<span class="quotelev1">&gt;                  MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;everyone,
</span><br>
<span class="quotelev1">&gt;                  MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  intercommunicator intcomm(everyone,comm_duplicate);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if(rank==0){
</span><br>
<span class="quotelev1">&gt;    GPSPosition *obj=new GPSPosition(100,200,300);
</span><br>
<span class="quotelev1">&gt;    shared_ptr&lt;Position&gt; pos(new Position);
</span><br>
<span class="quotelev1">&gt;    pos-&gt;setVals();
</span><br>
<span class="quotelev1">&gt;    obj-&gt;addP(pos);
</span><br>
<span class="quotelev1">&gt;    intcomm.send(0,100,obj);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10547.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10530.php">Ashika Umanga Umagiliya: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
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
