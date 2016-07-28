<?
$subject_val = "Re: [OMPI users] Build failure on scientific linux 5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 19:19:55 2014" -->
<!-- isoreceived="20140514231955" -->
<!-- sent="Wed, 14 May 2014 16:18:14 -0700" -->
<!-- isosent="20140514231814" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure on scientific linux 5.4" -->
<!-- id="66873D44-0451-4ED2-AAB8-72069C9B9F17_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOGUJ6FLj3txOP_+44PPZwAEo0Zg6CVYqbAZ4DWnXNiCvKrwJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build failure on scientific linux 5.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 19:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24370.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Reply:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just sniffing around the web, I found that this is a problem caused by newer versions of gcc. One reporter stated that they resolved the problem by adding &quot;-fgnu89-inline&quot; to their configuration:
<br>
<p>&quot;add the compiler flag &quot;-fgnu89-inline&quot; (because of an issue where old glibc libraries aren't compatible with &quot;the c99 standard&quot;). I added the compilation flag (adding it just after the &quot;-std=gnu99&quot; option) and the compilation errors went away.&quot;
<br>
<p><p><p>On May 14, 2014, at 2:17 PM, Jack Stalnaker &lt;jack.stalnaker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am having the same compile time failure mentioned on the devel group here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14221.php">http://www.open-mpi.org/community/lists/devel/2014/02/14221.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, the compilation of romio fails with errors about redefinition of lstat64, I am attaching the requested configuration and make outputs. Can anyone help? No one responded to the linked message above. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiling using gcc 4.8.2, which is not the system compiler. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; --Jack
</span><br>
<span class="quotelev1">&gt; &lt;config.out.bz2&gt;&lt;make.out.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24370.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24361.php">Jack Stalnaker: "[OMPI users] Build failure on scientific linux 5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<li><strong>Reply:</strong> <a href="24383.php">Jack Stalnaker: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
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
