<?
$subject_val = "Re: [OMPI users] Symbol not found: _evsignal_base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 19:24:01 2011" -->
<!-- isoreceived="20110526232401" -->
<!-- sent="Thu, 26 May 2011 17:23:35 -0600" -->
<!-- isosent="20110526232335" -->
<!-- name="charles reid" -->
<!-- email="charlesreid1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Symbol not found: _evsignal_base" -->
<!-- id="BANLkTin2tH852MvsaWE0wey37dKunqAzuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BANLkTi=EJppoM793MKixu8dGSqDEZ7aQ3A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-05-26 19:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>In reply to:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can disregard, the problem has been resolved by re-running the
<br>
configure/make/make install procedure.  Thanks again for the help!
<br>
<p><p>Charles
<br>
<p><p>On Thu, May 26, 2011 at 13:16, charles reid &lt;charlesreid1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff &amp; others -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the response.  OpenMPI compiles fine, so there are no problems
</span><br>
<span class="quotelev1">&gt; with the make process, but I can't run &quot;mpirun&quot; because the program won't
</span><br>
<span class="quotelev1">&gt; compile with mpicc - this case isn't really covered by the &quot;Getting Help&quot;
</span><br>
<span class="quotelev1">&gt; page.  However, I have provided the output of configure/make/make install,
</span><br>
<span class="quotelev1">&gt; even though it was successful.  The .tar.gz file is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://files.charlesmartinreid.com/openmpi_out.tar.gz">http://files.charlesmartinreid.com/openmpi_out.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is any additional info that would be helpful, please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 25, 2011 at 17:27, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like your installation is busted somehow.  Can you send all the
</span><br>
<span class="quotelev2">&gt;&gt; information listed here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2011, at 4:05 PM, charles reid wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi -
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to compile a simple hello world program with mpicc,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ cat test.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; main()
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   printf (&quot;Hello World!\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but I'm seeing this issue:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Referenced from: /uufs/
</span><br>
<span class="quotelev2">&gt;&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  in /uufs/
</span><br>
<span class="quotelev2">&gt;&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Trace/BPT trap
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I found this previous thread,
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033</a> ,
</span><br>
<span class="quotelev2">&gt;&gt; which suggested adding the installation directory's lib/ to LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; would fix things, but it did not:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $ export
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=&quot;${HOME}/pkg/openmpi/1.4.3_bigmac/lib:${LD_LIBRARY_PATH}&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dyld: Symbol not found: _evsignal_base
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Referenced from: /uufs/
</span><br>
<span class="quotelev2">&gt;&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Expected in: flat namespace
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  in /uufs/
</span><br>
<span class="quotelev2">&gt;&gt; chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Trace/BPT trap
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any suggestions on what I might be doing wrong?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Charles
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16646.php">Robert Horton: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>In reply to:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
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
