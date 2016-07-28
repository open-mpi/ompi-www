<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:02:51 2010" -->
<!-- isoreceived="20100312210251" -->
<!-- sent="Fri, 12 Mar 2010 14:02:47 -0700" -->
<!-- isosent="20100312210247" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="D6AB3C78-DF02-416A-9E07-3A6DB327A2EF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6233779D-78E0-4032-9060-BBE70ABEDB68_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in using openmpi<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12335.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12335.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One more thing.  The line should have been:
<br>
<p>export LD_LIBRARY_PATH=/home/jess/local/ompi/lib64
<br>
<p>The space in the previous email will make bash unhappy 8-|.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 12, 2010, at 1:56 PM, Samuel K. Gutierrez wrote:
&gt; Hi,
&gt;
&gt; It sounds like you may need to set your LD_LIBRARY_PATH environment  
&gt; variable correctly.  There are several ways that you can tell the  
&gt; dynamic linker where the required libraries are located, but the  
&gt; following may be sufficient for your needs.
&gt;
&gt; Let's say, for example, that your Open MPI installation is rooted  
&gt; at /home/jess/local/ompi and the libraries are located in /home/jess/ 
&gt; local/ompi/lib64, try (bash-like shell):
&gt;
&gt; export LD_LIBRARY_PATH= /home/jess/local/ompi/lib64
&gt;
&gt; Hope this helps,
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt; On Mar 12, 2010, at 1:32 PM, vaibhav dutt wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; I have installed openmpi on an Kubuntu , with Dual core Linux AMD  
&gt;&gt; Athlon
&gt;&gt; When trying to compile a simple program, I am getting an error.
&gt;&gt;
&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
&gt;&gt; open shared object file: No such file or dir
&gt;&gt;
&gt;&gt; I read somewhere that this error is because of some intel compiler
&gt;&gt; being not installed on the proper node, which I don't understand as I
&gt;&gt; am using AMD.
&gt;&gt;
&gt;&gt; Kindly give your suggestions
&gt;&gt;
&gt;&gt; Thank You
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12335.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12335.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
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
