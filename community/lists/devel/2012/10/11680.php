<?
$subject_val = "Re: [OMPI devel] sbgp problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 15:06:04 2012" -->
<!-- isoreceived="20121030190604" -->
<!-- sent="Tue, 30 Oct 2012 12:05:57 -0700" -->
<!-- isosent="20121030190557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sbgp problem" -->
<!-- id="DBA695F5-5766-4073-B146-FAF465A69C23_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509022FF.2050909_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sbgp problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 15:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11681.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11678.php">Edgar Gabriel: "[OMPI devel] sbgp problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11682.php">Edgar Gabriel: "Re: [OMPI devel] sbgp problem"</a>
<li><strong>Reply:</strong> <a href="11682.php">Edgar Gabriel: "Re: [OMPI devel] sbgp problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Grrrrrr....bloody verb @##$@$.
<br>
<p>Okay, I'll make that edit. Is that the last thing required to fix this problem?
<br>
<p>On Oct 30, 2012, at 11:57 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; so the sbgp problem that I mentioned on the call this morning
</span><br>
<span class="quotelev1">&gt; unfortunately is not resolved by just adding the common/verbs directory
</span><br>
<span class="quotelev1">&gt; into the 1.7 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We looked a bit into it, and the problem/difference between in the file
</span><br>
<span class="quotelev1">&gt; ompi/sbgp/ibnet/sbgp_ibnet_component.c which has the following include
</span><br>
<span class="quotelev1">&gt; statement:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/common/ofautils/common_ofautils.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same file on trunk includes however
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/common/verbs/common_verbs.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I make this change in the 1.7, things compile properly, otherwise we
</span><br>
<span class="quotelev1">&gt; still have the error message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bgp_ibnet_component.c: In function 'ibnet_load_devices':
</span><br>
<span class="quotelev1">&gt; sbgp_ibnet_component.c:527:5: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'ompi_ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt; sbgp_ibnet_component.c:527:13: warning: assignment makes pointer from
</span><br>
<span class="quotelev1">&gt; integer without a cast
</span><br>
<span class="quotelev1">&gt; sbgp_ibnet_component.c:553:5: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'ompi_ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [sbgp_ibnet_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11681.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11679.php">Ralph Castain: "Re: [OMPI devel] process kill signal 59"</a>
<li><strong>In reply to:</strong> <a href="11678.php">Edgar Gabriel: "[OMPI devel] sbgp problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11682.php">Edgar Gabriel: "Re: [OMPI devel] sbgp problem"</a>
<li><strong>Reply:</strong> <a href="11682.php">Edgar Gabriel: "Re: [OMPI devel] sbgp problem"</a>
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
