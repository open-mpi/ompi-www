<?
$subject_val = "Re: [OMPI users] Build failure on scientific linux 5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 09:44:12 2014" -->
<!-- isoreceived="20140515134412" -->
<!-- sent="Thu, 15 May 2014 08:44:12 -0500" -->
<!-- isosent="20140515134412" -->
<!-- name="Jack Stalnaker" -->
<!-- email="jack.stalnaker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build failure on scientific linux 5.4" -->
<!-- id="CAOGUJ6Fh6Myv0eGW25o5s=JRsZNFajgJkYJTpHoP2F2fZu-vSw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="66873D44-0451-4ED2-AAB8-72069C9B9F17_at_open-mpi.org" -->
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
<strong>From:</strong> Jack Stalnaker (<em>jack.stalnaker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 09:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24369.php">Ralph Castain: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This worked, thank you. A simple
<br>
<p>CFLAGS=&quot;-fgnu89-inline&quot; ./configure
<br>
<p>did the trick.
<br>
<p><p>On Wed, May 14, 2014 at 6:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just sniffing around the web, I found that this is a problem caused by
</span><br>
<span class="quotelev1">&gt; newer versions of gcc. One reporter stated that they resolved the problem
</span><br>
<span class="quotelev1">&gt; by adding &quot;-fgnu89-inline&quot; to their configuration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;add the compiler flag &quot;-fgnu89-inline&quot; (because of an issue where old
</span><br>
<span class="quotelev1">&gt; glibc libraries aren't compatible with &quot;the c99 standard&quot;). I added the
</span><br>
<span class="quotelev1">&gt; compilation flag (adding it just after the &quot;-std=gnu99&quot; option) and the
</span><br>
<span class="quotelev1">&gt; compilation errors went away.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2014, at 2:17 PM, Jack Stalnaker &lt;jack.stalnaker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having the same compile time failure mentioned on the devel group
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14221.php">http://www.open-mpi.org/community/lists/devel/2014/02/14221.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, the compilation of romio fails with errors about redefinition of
</span><br>
<span class="quotelev1">&gt; lstat64, I am attaching the requested configuration and make outputs. Can
</span><br>
<span class="quotelev1">&gt; anyone help? No one responded to the linked message above.
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
<span class="quotelev1">&gt; &lt;config.out.bz2&gt;&lt;make.out.bz2&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24384.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24382.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24369.php">Ralph Castain: "Re: [OMPI users] Build failure on scientific linux 5.4"</a>
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
