<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 15:25:32 2006" -->
<!-- isoreceived="20061018192532" -->
<!-- sent="Wed, 18 Oct 2006 11:25:26 -0800" -->
<!-- isosent="20061018192526" -->
<!-- name="Dan Cardin" -->
<!-- email="dcardin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world" -->
<!-- id="1161199526.6775.43.camel_at_hermes" -->
<!-- inreplyto="FE71A5E8-1231-444D-8393-BA2F9CBDF326_at_open-mpi.org" -->
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
<strong>From:</strong> Dan Cardin (<em>dcardin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 15:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>In reply to:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Reply:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I am using 1.1.1. Any suggestions on how fix this?
<br>
<p>-dc
<br>
<p><p>On Wed, 2006-10-18 at 10:27 -0700, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Ah, are you using Open MPI 1.1.x, by chance?  The wrapper compilers  
</span><br>
<span class="quotelev1">&gt; need to be able to find a text file in $prefix/share/openmpi/, where  
</span><br>
<span class="quotelev1">&gt; $prefix is the prefix you gave when you configured Open MPI.  If that  
</span><br>
<span class="quotelev1">&gt; path is different on two hosts, the wrapper compilers can't find the  
</span><br>
<span class="quotelev1">&gt; text file, and things fall apart.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's supposed to be an error message from the wrapper compilers  
</span><br>
<span class="quotelev1">&gt; when this occurs.  Unfortunately, there is a bug in the 1.1.x wrapper  
</span><br>
<span class="quotelev1">&gt; compilers such that they just exit with a non-zero exit status  
</span><br>
<span class="quotelev1">&gt; without printing that error message.  Not friendly, unfortunately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2006, at 9:37 AM, Dan Cardin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I found my problem. I installed my openmpi onto an nfs share that
</span><br>
<span class="quotelev2">&gt; &gt; resides on another machine. If I login to the machine where the nfs
</span><br>
<span class="quotelev2">&gt; &gt; share is physically I can compile and run the hello world.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is my first cluster build. Does anyone have a suggestion how I  
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt; keeps this on a nfs share and make it work? Thank you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mac os x 10.3 cluster
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -dan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2006-10-17 at 22:15 -0600, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 17, 2006, at 6:41 PM, Dan Cardin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello all, I have installed openmpi on a small apple panther  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The install went smoothly but when I compile a program with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc helloworld.c -o hello
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No files or message are ever generated. Any help would be  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What version of Open MPI are you using?  Also, what is the output of:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    mpicc -showme
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>In reply to:</strong> <a href="2005.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Reply:</strong> <a href="2007.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
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
