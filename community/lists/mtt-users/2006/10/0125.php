<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 20:04:33 2006" -->
<!-- isoreceived="20061003000433" -->
<!-- sent="Mon, 02 Oct 2006 20:04:17 -0400" -->
<!-- isosent="20061003000417" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Ibm test suite build &amp;quot;failing&amp;quot;" -->
<!-- id="C1472141.29340%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E75247B3-C419-4E3F-BE99-5E257219549C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-02 20:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0126.php">Jeff Squyres: "[MTT users] Adjusting max np for Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0124.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>Reply:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K.  Am still investigating.
<br>
<p><p>On 10/2/06 7:57 PM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yea I believe so. From what I can tell it looks pretty much the same
</span><br>
<span class="quotelev1">&gt; IIRC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2006, at 7:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is your &quot;failed&quot; IBM build looking like this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/~emallove/svn/mtt/trunk/server/php/">http://www.open-mpi.org/~emallove/svn/mtt/trunk/server/php/</a>
</span><br>
<span class="quotelev2">&gt;&gt; reporter.php?&amp;maf
</span><br>
<span class="quotelev2">&gt;&gt; _start_test_timestamp=2006-10-01%2000:00:00%20through%202006-10-02%
</span><br>
<span class="quotelev2">&gt;&gt; 2021:27:2
</span><br>
<span class="quotelev2">&gt;&gt; 7&amp;maf_agg_timestamp=-
</span><br>
<span class="quotelev2">&gt;&gt; &amp;maf_phase=builds&amp;maf_success=Fail&amp;mef_platform_hardwar
</span><br>
<span class="quotelev2">&gt;&gt; e=All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_mpi_name=All&amp;agg_mpi_name
</span><br>
<span class="quotelev2">&gt;&gt; =off&amp;m
</span><br>
<span class="quotelev2">&gt;&gt; ef_mpi_version=All&amp;agg_mpi_version=off&amp;mef_platform_id=All&amp;agg_platfor
</span><br>
<span class="quotelev2">&gt;&gt; m_id=o
</span><br>
<span class="quotelev2">&gt;&gt; n&amp;by_atom=*by_test_case&amp;go=Table&amp;agg_test_build_section_name=off&amp;mef_t
</span><br>
<span class="quotelev2">&gt;&gt; est_bu
</span><br>
<span class="quotelev2">&gt;&gt; ild_section_name=All&amp;table_title=Details%20of%20Test%20Builds%20that
</span><br>
<span class="quotelev2">&gt;&gt; %20faile
</span><br>
<span class="quotelev2">&gt;&gt; d&amp;1-page=off&amp;no_bookmarks&amp;no_bookmarks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (hopefully that'll wrap ok and you can click on it...)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's a development web page, so don't bookmark it, but it looks
</span><br>
<span class="quotelev2">&gt;&gt; like Sun is
</span><br>
<span class="quotelev2">&gt;&gt; having the same problems you are (trunk).  The build outwardly
</span><br>
<span class="quotelev2">&gt;&gt; succeeds --
</span><br>
<span class="quotelev2">&gt;&gt; no error messages are shown -- but MTT is reporting that it fails
</span><br>
<span class="quotelev2">&gt;&gt; (click on
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;[I]&quot; to see the stdout/stderr).
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0126.php">Jeff Squyres: "[MTT users] Adjusting max np for Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0124.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>Reply:</strong> <a href="0135.php">Josh Hursey: "Re: [MTT users] Ibm test suite build &quot;failing&quot;"</a>
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
