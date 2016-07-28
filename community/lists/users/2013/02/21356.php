<?
$subject_val = "[OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 22:22:22 2013" -->
<!-- isoreceived="20130211032222" -->
<!-- sent="Sun, 10 Feb 2013 22:22:17 -0500" -->
<!-- isosent="20130211032217" -->
<!-- name="Mark Bolstad" -->
<!-- email="the.render.dude_at_[hidden]" -->
<!-- subject="[OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="CAPa_DOAvFwtrDgwc-TTszph0702JYq16a7W2yurSdJOEYyVWow_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Mark Bolstad (<em>the.render.dude_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 22:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
<li><strong>Previous message:</strong> <a href="21355.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I having some difficulties with building/running 1.6.3 on Mountain Lion
<br>
(10.8.2). I build with no errors and install into a prefix directory. I get
<br>
the following errors:
<br>
...
<br>
[bolstadm-lm3:38486] mca: base: component_find: unable to open
<br>
/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi/mca_shmem_sysv:
<br>
lt_dlerror() returned NULL! (ignored)
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_shmem_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
[bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
orterun.c at line 694
<br>
<p>I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in
<br>
combination and separately, and none of these seem to have much effect.
<br>
<p>So, I decided to try a straight build. The only option was
<br>
--disable-mpi-f77. It installed into /usr/local. There is no other mpi
<br>
version installed on the system, and I still get the same errors.
<br>
<p>However, I did install the version from MacPorts (also 1.6.3), and it works
<br>
correctly.
<br>
<p>I would appreciate if anyone had some insight into building on OS X 10.8.
<br>
<p>Mark
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
<li><strong>Previous message:</strong> <a href="21355.php">Ralph Castain: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
