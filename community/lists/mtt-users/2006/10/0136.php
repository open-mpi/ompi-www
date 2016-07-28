<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 17:13:58 2006" -->
<!-- isoreceived="20061007211358" -->
<!-- sent="Sat, 07 Oct 2006 17:13:52 -0400" -->
<!-- isosent="20061007211352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Ibm test suite build &amp;quot;failing&amp;quot;" -->
<!-- id="C14D90D0.29FD7%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AD1B29FE-D0A2-4A9B-B47C-76C150E18069_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 17:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Josh's help, this has now been fixed.
<br>
<p>Everyone should &quot;svn up&quot; their MTT copy from the release branch.
<br>
<p>Thanks!
<br>
<p><p>On 10/7/06 8:41 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just to revive this thread. It seems that the tests run on BigRed
</span><br>
<span class="quotelev1">&gt; last night *all* branches failed in the below way instead of just
</span><br>
<span class="quotelev1">&gt; v1.1 :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I source the .sh file and try a &quot;make&quot; in the install directory
</span><br>
<span class="quotelev1">&gt; everything builds fine and the exit status of make is 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I look at the logs there is no &quot;success=*&quot; entry for any of the
</span><br>
<span class="quotelev1">&gt; test builds for any of the branches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any leads on what is causing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2006, at 8:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; K.  Am still investigating.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/2/06 7:57 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yea I believe so. From what I can tell it looks pretty much the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 2, 2006, at 7:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is your &quot;failed&quot; IBM build looking like this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/~emallove/svn/mtt/trunk/server/php/">http://www.open-mpi.org/~emallove/svn/mtt/trunk/server/php/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reporter.php?&amp;maf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _start_test_timestamp=2006-10-01%2000:00:00%20through%202006-10-02%
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2021:27:2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7&amp;maf_agg_timestamp=-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;maf_phase=builds&amp;maf_success=Fail&amp;mef_platform_hardwar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e=All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_mpi_name=All&amp;agg_mpi_na
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =off&amp;m
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ef_mpi_version=All&amp;agg_mpi_version=off&amp;mef_platform_id=All&amp;agg_platf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m_id=o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n&amp;by_atom=*by_test_case&amp;go=Table&amp;agg_test_build_section_name=off&amp;mef
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; est_bu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ild_section_name=All&amp;table_title=Details%20of%20Test%20Builds%20that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; %20faile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; d&amp;1-page=off&amp;no_bookmarks&amp;no_bookmarks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (hopefully that'll wrap ok and you can click on it...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's a development web page, so don't bookmark it, but it looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like Sun is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; having the same problems you are (trunk).  The build outwardly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; succeeds --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no error messages are shown -- but MTT is reporting that it fails
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (click on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;[I]&quot; to see the stdout/stderr).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0137.php">Ethan Mallove: "[MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>In reply to:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
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
