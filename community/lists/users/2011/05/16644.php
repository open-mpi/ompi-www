<?
$subject_val = "Re: [OMPI users] Symbol not found: _evsignal_base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 15:16:27 2011" -->
<!-- isoreceived="20110526191627" -->
<!-- sent="Thu, 26 May 2011 13:16:03 -0600" -->
<!-- isosent="20110526191603" -->
<!-- name="charles reid" -->
<!-- email="charlesreid1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Symbol not found: _evsignal_base" -->
<!-- id="BANLkTi=EJppoM793MKixu8dGSqDEZ7aQ3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="29701869-01F3-408A-AAD6-2CCB9B9A0AD1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Symbol not found: _evsignal_base<br>
<strong>From:</strong> charles reid (<em>charlesreid1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-26 15:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; others -
<br>
<p>Thanks for the response.  OpenMPI compiles fine, so there are no problems
<br>
with the make process, but I can't run &quot;mpirun&quot; because the program won't
<br>
compile with mpicc - this case isn't really covered by the &quot;Getting Help&quot;
<br>
page.  However, I have provided the output of configure/make/make install,
<br>
even though it was successful.  The .tar.gz file is here:
<br>
<p><a href="http://files.charlesmartinreid.com/openmpi_out.tar.gz">http://files.charlesmartinreid.com/openmpi_out.tar.gz</a>
<br>
<p>If there is any additional info that would be helpful, please let me know.
<br>
<p><p>Charles
<br>
<p><p>On Wed, May 25, 2011 at 17:27, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This looks like your installation is busted somehow.  Can you send all the
</span><br>
<span class="quotelev1">&gt; information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 24, 2011, at 4:05 PM, charles reid wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to compile a simple hello world program with mpicc,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat test.c
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; main()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   printf (&quot;Hello World!\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but I'm seeing this issue:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev2">&gt; &gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev2">&gt; &gt;   Referenced from: /uufs/
</span><br>
<span class="quotelev1">&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt; &gt;  in /uufs/
</span><br>
<span class="quotelev1">&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; Trace/BPT trap
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found this previous thread,
</span><br>
<span class="quotelev1">&gt; <a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033</a> ,
</span><br>
<span class="quotelev1">&gt; which suggested adding the installation directory's lib/ to LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; would fix things, but it did not:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;${HOME}/pkg/openmpi/1.4.3_bigmac/lib:${LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev1">&gt; ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev2">&gt; &gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev2">&gt; &gt;   Referenced from: /uufs/
</span><br>
<span class="quotelev1">&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt; &gt;  in /uufs/
</span><br>
<span class="quotelev1">&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; Trace/BPT trap
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions on what I might be doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Charles
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16645.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
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
