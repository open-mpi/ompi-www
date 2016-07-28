<?
$subject_val = "Re: [OMPI users] wrong rank and process number";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 16:55:35 2009" -->
<!-- isoreceived="20091022205535" -->
<!-- sent="Thu, 22 Oct 2009 16:55:29 -0400" -->
<!-- isosent="20091022205529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong rank and process number" -->
<!-- id="3D935F93-571C-44B7-A00D-CB2370B3987D_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3D0D42E-D8EA-4681-944D-6BCEF2949E2F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong rank and process number<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 16:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration"</a>
<li><strong>Previous message:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Typically, when seeing errors like this, it can mean that you've got a  
<br>
mismatch between the Open MPI that you compiled your application with,  
<br>
the mpirun that you're using to launch the application, and/or  
<br>
LD_LIBRARY_PATH to load the dynamic library libmpi.so (as Ralph stated/ 
<br>
alluded).
<br>
<p>Ensure that you have an exact match between all three of these things:  
<br>
compile your MPI app with the exact same version of Open MPI that you  
<br>
use for mpirun to launch the app, and ensure that LD_LIBRARY_PATH is  
<br>
pointing to the same libmpi.so (or the Right libmpi.so is in your  
<br>
system's default linker search paths).
<br>
<p><p><p>On Oct 22, 2009, at 4:48 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; If you google this list for entries about ubuntu, you will find a
</span><br>
<span class="quotelev1">&gt; bunch of threads discussing problems on that platform. This sounds
</span><br>
<span class="quotelev1">&gt; like one of the more common ones - I forget all the issues, but most
</span><br>
<span class="quotelev1">&gt; dealt with ubuntu coming with a very old OMPI version on it, and
</span><br>
<span class="quotelev1">&gt; issues with ensuring your path and ld_library_path are pointing to the
</span><br>
<span class="quotelev1">&gt; correct distribution. Also believe there are issues with figuring out
</span><br>
<span class="quotelev1">&gt; we are launching locally and other such things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2009, at 1:40 PM, Victor Rosas Garcia wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have just installed openmpi v. 1.2.5 under ubuntu 8.04 and I have
</span><br>
<span class="quotelev2">&gt; &gt; compiled the following &quot;hello world&quot; program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------start code------
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[]){
</span><br>
<span class="quotelev2">&gt; &gt; int rank, size, len;
</span><br>
<span class="quotelev2">&gt; &gt; char hostname[256] = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Get_processor_name(hostname, &amp;len);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;Hello World! I am %d of %d running on %s\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; rank, size, hostname);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; ------end code------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  which I think is pretty basic stuff.  Anyway, when I run it (single
</span><br>
<span class="quotelev2">&gt; &gt; node, three cores), I get the following output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec.openmpi -np 6 hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where &quot;el-torito&quot; is the hostname.  Shouldn't it be something like?:
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 0 of 6 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 1 of 6 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; Hello World! I am 2 of 6 running on el-torito
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas as to why I keep getting wrong numbers for rank and number
</span><br>
<span class="quotelev2">&gt; &gt; of processes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from Monterrey, Mexico
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Victor M. Rosas Garc&#237;a
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] processor affinity -- OpenMPI / batchsystem integration"</a>
<li><strong>Previous message:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
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
