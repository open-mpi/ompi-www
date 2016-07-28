<?
$subject_val = "Re: [OMPI users] wrong rank and process number";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 16:48:53 2009" -->
<!-- isoreceived="20091022204853" -->
<!-- sent="Thu, 22 Oct 2009 14:48:43 -0600" -->
<!-- isosent="20091022204843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong rank and process number" -->
<!-- id="C3D0D42E-D8EA-4681-944D-6BCEF2949E2F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="c2a41d1e0910221240s9b07416hf7b6e9a83a44ffe4_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 16:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Reply:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you google this list for entries about ubuntu, you will find a  
<br>
bunch of threads discussing problems on that platform. This sounds  
<br>
like one of the more common ones - I forget all the issues, but most  
<br>
dealt with ubuntu coming with a very old OMPI version on it, and  
<br>
issues with ensuring your path and ld_library_path are pointing to the  
<br>
correct distribution. Also believe there are issues with figuring out  
<br>
we are launching locally and other such things.
<br>
<p><p>On Oct 22, 2009, at 1:40 PM, Victor Rosas Garcia wrote:
<br>
<p><span class="quotelev1">&gt; Hello everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed openmpi v. 1.2.5 under ubuntu 8.04 and I have  
</span><br>
<span class="quotelev1">&gt; compiled the following &quot;hello world&quot; program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------start code------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]){
</span><br>
<span class="quotelev1">&gt; int rank, size, len;
</span><br>
<span class="quotelev1">&gt; char hostname[256] = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(hostname, &amp;len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello World! I am %d of %d running on %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; rank, size, hostname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ------end code------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  which I think is pretty basic stuff.  Anyway, when I run it (single  
</span><br>
<span class="quotelev1">&gt; node, three cores), I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec.openmpi -np 6 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1 running on el-torito
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where &quot;el-torito&quot; is the hostname.  Shouldn't it be something like?:
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 6 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 1 of 6 running on el-torito
</span><br>
<span class="quotelev1">&gt; Hello World! I am 2 of 6 running on el-torito
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas as to why I keep getting wrong numbers for rank and number  
</span><br>
<span class="quotelev1">&gt; of processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from Monterrey, Mexico
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Victor M. Rosas Garc&#237;a
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<li><strong>In reply to:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Reply:</strong> <a href="10946.php">Jeff Squyres: "Re: [OMPI users] wrong rank and process number"</a>
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
