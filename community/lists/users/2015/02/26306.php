<?
$subject_val = "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 12:57:47 2015" -->
<!-- isoreceived="20150208175747" -->
<!-- sent="Sun, 8 Feb 2015 09:57:43 -0800" -->
<!-- isosent="20150208175743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking" -->
<!-- id="5B1A0475-EF57-477A-9302-B883FC73008D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAC-_n50+tUFR2DnDoZVPgv23P=sti8OqSVXAQXdae8Q7574EtA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-08 12:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Previous message:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>In reply to:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the first thing is that there is no reason to cross compile in this arrangement. Your target and host are the same, and the configuration won&#226;&#128;&#153;t do anything with it.
<br>
<p>Normally you would set host and target. However, like I said, in this case you are providing the same argument to both, and so nothing will happen.
<br>
<p><p><span class="quotelev1">&gt; On Feb 8, 2015, at 3:45 AM, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two systems A (aka Host) and B (aka Target). On A a compiler suite is installed (intel 14.0.2), on B there is no compiler. I want to compile openmpi on A for running it on system B (in particular, I want to use mpirun and mpif90), so I want to have static linking to the intel libraries. First of all, I would like to know if it is possible to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of  uname -a on the two systems is:
</span><br>
<span class="quotelev1">&gt; 1) Host
</span><br>
<span class="quotelev1">&gt; Linux host 2.6.32-220.el6.x86_64 #1 SMP Tue Dec 6 19:48:22 GMT 2011 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Target
</span><br>
<span class="quotelev1">&gt; Linux target 2.6.35-32-server #67-Ubuntu SMP Mon Mar 5 21:13:25 UTC 2012 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the following configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=icc
</span><br>
<span class="quotelev1">&gt; export FC=ifort
</span><br>
<span class="quotelev1">&gt; export CXX=icpc
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=-static-intel
</span><br>
<span class="quotelev1">&gt; export LANG=C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/user/local/openmpi-1.8.4-cc/ --host=x86_64-pc-linux-gnu --build=x86_64-pc-linux-gnu --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if the configuration triplets I am using are correct. I know that in this case I am not technically cross-compiling, but I was wondering if in the general case I have also to set --target and to what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Catastrophic error: could not set locale &quot;&quot; to allow processing of multibyte characters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attach make.out and output.out (zipped)
</span><br>
<span class="quotelev1">&gt; &lt;config.out.bz2&gt;&lt;make.out.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26305.php">http://www.open-mpi.org/community/lists/users/2015/02/26305.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Previous message:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>In reply to:</strong> <a href="26305.php">simona bellavista: "[OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
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
