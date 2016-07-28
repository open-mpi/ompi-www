<?
$subject_val = "[OMPI devel] MTT failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 13:39:47 2015" -->
<!-- isoreceived="20150218183947" -->
<!-- sent="Wed, 18 Feb 2015 11:39:46 -0700" -->
<!-- isosent="20150218183946" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT failures" -->
<!-- id="CAF1Cqj6QM22CSCzmztQc3k6xsccR12gTNAX2URd1bbrsEYrEDA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MTT failures<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 13:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<li><strong>Previous message:</strong> <a href="16991.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] git commit id in coverity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<li><strong>Reply:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks
<br>
<p>I noticed that the NERSC (carver/edison) MTT smoke tests are failing now.
<br>
I also see a lot of
<br>
ivy cluster runs are also failing.  All the nersc runs are failing with:
<br>
<p>c1479:05071] OPAL ERROR: Bad parameter in file util/attr.c at line 431
<br>
[c1479:05071] [[57033,0],0] ORTE_ERROR_LOG: Bad parameter in file
<br>
util/attr.c at line 57
<br>
[c1479:05071] Signal: Segmentation fault (11)
<br>
[c1479:05071] Signal code: Address not mapped (1)
<br>
[c1479:05071] *** End of error message ***
<br>
<p>the mpirun command line is
<br>
<p><p>mpirun --bind-to none -np 32 --mca coll ^ml --mca btl
<br>
self,vader,openib  --prefix
<br>
/global/u2/h/hpp/mtt_carver_tmp/installs/8v68/install ./c_hello
<br>
<p><p>Before people begin blaming this as a cray thing, this is from the
<br>
NERSC carver system which is an ibm dataplex system running redhat and
<br>
using MLNX connectX HCAs.
<br>
<p>Anyone else seeing these failures?
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<li><strong>Previous message:</strong> <a href="16991.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] git commit id in coverity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
<li><strong>Reply:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI devel] MTT failures"</a>
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
