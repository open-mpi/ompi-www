<?
$subject_val = "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 18:30:23 2015" -->
<!-- isoreceived="20150406223023" -->
<!-- sent="Mon, 6 Apr 2015 16:30:22 -0600" -->
<!-- isosent="20150406223022" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors" -->
<!-- id="CAF1Cqj5B8xWhMGVOdYosKKOXbVdXnX9gC4Sc9jsx-o_my6ukkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 18:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Previous message:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Reply:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>There seems to have been recent outburst of interest in the mpi java
<br>
bindings, so moving in retrograde fashion back to what I use to be doing,
<br>
I've started investigating the Ompi JNI code.
<br>
<p>I'm noticing that at least on sles11sp3, that soon after the java vm
<br>
invokes the JNI_OnUnload of the ompi JNI code, the JVM segfaults when
<br>
running some pthread key destructors, namely those associated with pthread
<br>
keys that ompi is setting up.  If I set the destructor field to null in the
<br>
ompi calls to pthread_key_create, then the jvm shuts down without a
<br>
segfault after the java app exits.
<br>
<p>Note that one can get lucky, as is the case when I run the java app on my
<br>
mac.  That's because the jvm on this system doesn't care to run the
<br>
JNI_OnUnload code.
<br>
<p>One way to handle this problem would be to go find all the places
<br>
(fortunately not many) where opal_tsd_key_create is called, and then make
<br>
sure there is an appropriate opal_tsd_key_destroy for the key during the
<br>
MPI_Finalize procedure.  Alternately,  since this is basically a dso
<br>
problem, one could define fini functions to run the destructors during the
<br>
dlclose procedure.
<br>
<p>Any thoughts?
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Previous message:</strong> <a href="17184.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Reply:</strong> <a href="17186.php">Ralph Castain: "Re: [OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
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
