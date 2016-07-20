<?
$subject_val = "[hwloc-users] Single hwloc.h header files that work on linux and windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 16:30:09 2013" -->
<!-- isoreceived="20130103213009" -->
<!-- sent="Thu, 3 Jan 2013 13:29:59 -0800" -->
<!-- isosent="20130103212959" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[hwloc-users] Single hwloc.h header files that work on linux and windows" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E91A4A347_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] Single hwloc.h header files that work on linux and windows<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 16:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Brice Goglin: "[hwloc-users] [RFC] deprecating multiple load() support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Reply:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an application is supposed to work with both windows and linux.  To that end, I downloaded hwloc, configured and then included the hwloc header files in my application.  I dynamically load the libhwloc.so library and map the functions I need.  If libhwloc.so is not there, then I can still run but give a warning.  However, I have run into a problem.  hwloc.h includes a whole bunch of other headers, one of which is config.h.  And config.h is specific to how the library was configured.  Therefore, when I attempt to compile my application on windows, I get an error about missing pthread.h file.  This is probably one of many differences.
<br>
<p>Is there a special hwloc.h and supporting headers that is system independent so I can include them and build on both windows and linux?  Or do I need to have two different sets of header files, one for linux and one for windows?   Perhaps I just need a config.h for windows and one for linux and select them at build time.
<br>
<p>Rolf
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Brice Goglin: "[hwloc-users] [RFC] deprecating multiple load() support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>Reply:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
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
