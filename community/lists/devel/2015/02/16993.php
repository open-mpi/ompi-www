<?
$subject_val = "Re: [OMPI devel] MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 13:41:02 2015" -->
<!-- isoreceived="20150218184102" -->
<!-- sent="Wed, 18 Feb 2015 10:40:58 -0800" -->
<!-- isosent="20150218184058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT failures" -->
<!-- id="09AC85DA-5DD1-4200-94F2-6F5691C2BC8F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj6QM22CSCzmztQc3k6xsccR12gTNAX2URd1bbrsEYrEDA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 13:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="16992.php">Howard Pritchard: "[OMPI devel] MTT failures"</a>
<li><strong>In reply to:</strong> <a href="16992.php">Howard Pritchard: "[OMPI devel] MTT failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You&#226;&#128;&#153;re almost 14 hours out-of-date Howard - it was fixed last night
<br>
<p><span class="quotelev1">&gt; On Feb 18, 2015, at 10:39 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed that the NERSC (carver/edison) MTT smoke tests are failing now.  I also see a lot of 
</span><br>
<span class="quotelev1">&gt; ivy cluster runs are also failing.  All the nersc runs are failing with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c1479:05071] OPAL ERROR: Bad parameter in file util/attr.c at line 431
</span><br>
<span class="quotelev1">&gt; [c1479:05071] [[57033,0],0] ORTE_ERROR_LOG: Bad parameter in file util/attr.c at line 57
</span><br>
<span class="quotelev1">&gt; [c1479:05071] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [c1479:05071] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [c1479:05071] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; the mpirun command line is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none -np 32 --mca coll ^ml --mca btl self,vader,openib  --prefix
</span><br>
<span class="quotelev1">&gt; /global/u2/h/hpp/mtt_carver_tmp/installs/8v68/install ./c_hello 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before people begin blaming this as a cray thing, this is from the NERSC carver system which is an ibm dataplex system running redhat and using MLNX connectX HCAs.
</span><br>
<span class="quotelev1">&gt; Anyone else seeing these failures?
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16992.php">http://www.open-mpi.org/community/lists/devel/2015/02/16992.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16994.php">George Bosilca: "[OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="16992.php">Howard Pritchard: "[OMPI devel] MTT failures"</a>
<li><strong>In reply to:</strong> <a href="16992.php">Howard Pritchard: "[OMPI devel] MTT failures"</a>
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
