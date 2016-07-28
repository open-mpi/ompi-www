<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 15:56:53 2010" -->
<!-- isoreceived="20100312205653" -->
<!-- sent="Fri, 12 Mar 2010 13:56:48 -0700" -->
<!-- isosent="20100312205648" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="6233779D-78E0-4032-9060-BBE70ABEDB68_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f807a19d1003121232j58e147abte5ad52b53e4ca55b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-12 15:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It sounds like you may need to set your LD_LIBRARY_PATH environment  
<br>
variable correctly.  There are several ways that you can tell the  
<br>
dynamic linker where the required libraries are located, but the  
<br>
following may be sufficient for your needs.
<br>
<p>Let's say, for example, that your Open MPI installation is rooted at / 
<br>
home/jess/local/ompi and the libraries are located in /home/jess/local/ 
<br>
ompi/lib64, try (bash-like shell):
<br>
<p>export LD_LIBRARY_PATH= /home/jess/local/ompi/lib64
<br>
<p>Hope this helps,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 12, 2010, at 1:32 PM, vaibhav dutt wrote:
&gt; Hi,
&gt;
&gt; I have installed openmpi on an Kubuntu , with Dual core Linux AMD  
&gt; Athlon
&gt; When trying to compile a simple program, I am getting an error.
&gt;
&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
&gt; open shared object file: No such file or dir
&gt;
&gt; I read somewhere that this error is because of some intel compiler
&gt; being not installed on the proper node, which I don't understand as I
&gt; am using AMD.
&gt;
&gt; Kindly give your suggestions
&gt;
&gt; Thank You
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
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
