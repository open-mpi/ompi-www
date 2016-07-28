<?
$subject_val = "Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 06:42:13 2013" -->
<!-- isoreceived="20131014104213" -->
<!-- sent="Mon, 14 Oct 2013 12:42:10 +0200" -->
<!-- isosent="20131014104210" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;make check&amp;quot; failure in opal_datatype_test (v1.6.5)" -->
<!-- id="47411224-5096-49C8-8BC2-D477E3CB6CFB_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMvdAsLGTnYCT39DiO_xEsViESNONROXatYGTpkCCdoRT1NSMA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-14 06:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13094.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Previous message:</strong> <a href="13092.php">Ralph Castain: "[OMPI devel] oshmem warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="13043.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To enable the debug mode you should configure Open MPI with --enable-debug. After compilation just run the test with gdb, and export a backtrace (gdb command bt or where).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Oct 14, 2013, at 11:44 , Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Can you please tell me how to run test in debug mode?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 4, 2013 at 3:42 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The output seems normal, there is no indication of anything weird happening. Also I tried to reproduce the error with other icc versions to no avail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Syed,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you run the test in debug mode inside gdb? When the segfault happen please get the stack trace (gdb command where or bt) and send it to me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2013, at 13:06 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this thread on the users list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thread starts here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2013/09/22682.php">http://www.open-mpi.org/community/lists/users/2013/09/22682.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Relevant messages start here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2013/09/22725.php">http://www.open-mpi.org/community/lists/users/2013/09/22725.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is a zip file from the user experiencing a failure in &quot;make check&quot; in opal_datatype_test.  I think he may have run &quot;make -j X check&quot; because the output is a little jumbled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm unable to replicate the error on RHEL6/icc 14.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you see this kind of failure before in opal_datatype_test / have any idea how the error indicated in the output can happen?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;testlog.zip&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev1">&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development Division
</span><br>
<span class="quotelev1">&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev1">&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev1">&gt; Cell # +923155145014
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13094.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Previous message:</strong> <a href="13092.php">Ralph Castain: "[OMPI devel] oshmem warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="13043.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;make check&quot; failure in opal_datatype_test (v1.6.5)"</a>
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
