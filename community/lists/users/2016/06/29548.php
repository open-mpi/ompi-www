<?
$subject_val = "Re: [OMPI users] Shared Libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 24 21:31:39 2016" -->
<!-- isoreceived="20160625013139" -->
<!-- sent="Sat, 25 Jun 2016 10:31:38 +0900" -->
<!-- isosent="20160625013138" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Libraries" -->
<!-- id="CAAkFZ5t0OXPUtsu29M2PHq49MQHOc9TrsAtGBsSj=jWGQSTyJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AB60EFA9-5ADB-4BE7-82C7-7DB67F395EA5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Libraries<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-24 21:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, I recommend you do not name your library libmpi.so, since this name
<br>
is already used by Open MPI
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, June 25, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 24, 2016, at 4:39 PM, Richard C. Wagner &lt;drsavage_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I try to compile the library file in 32-bit mode.  The first
</span><br>
<span class="quotelev1">&gt; command is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -fPIC -m32 -c libtest.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then the second is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -shared -m32 -o libmpi.so libtest.o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you can see below, compiling the object file works.  But the second
</span><br>
<span class="quotelev1">&gt; command, linking libtest.o and writing the shared library, fails.  Can you
</span><br>
<span class="quotelev1">&gt; see what's wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -fPIC -m32 -c libtest.c
</span><br>
<span class="quotelev2">&gt; &gt; rwagner_at_tuxcfd10:~/engrhome/CSU/LibTests$ mpicc -shared -m32 -o
</span><br>
<span class="quotelev1">&gt; libmpi.so libtest.o
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible /usr//lib/libmpi.so when searching
</span><br>
<span class="quotelev1">&gt; for -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible /usr/lib/openmpi/lib/libmpi.so when
</span><br>
<span class="quotelev1">&gt; searching for -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-linux-gnu/4.9/../../../libmpi.so when searching for
</span><br>
<span class="quotelev1">&gt; -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: skipping incompatible //usr/lib/libmpi.so when searching
</span><br>
<span class="quotelev1">&gt; for -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: cannot find -lhwloc
</span><br>
<span class="quotelev2">&gt; &gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And for added info, these two commands succeed when I don't use the -m32
</span><br>
<span class="quotelev1">&gt; switch.  The library comes out as you'd expect it to, but as a 64-bit
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means that the Open MPI installed in /usr/lib and /usr/lib/openmpi is
</span><br>
<span class="quotelev1">&gt; a 64 bit version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to install a 32 bit version of Open MPI, and compile/link against
</span><br>
<span class="quotelev1">&gt; that one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29547.php">http://www.open-mpi.org/community/lists/users/2016/06/29547.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
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
