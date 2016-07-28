<?
$subject_val = "[OMPI devel] New interface code refactor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 16:28:16 2010" -->
<!-- isoreceived="20100831202816" -->
<!-- sent="Tue, 31 Aug 2010 14:28:10 -0600" -->
<!-- isosent="20100831202810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] New interface code refactor" -->
<!-- id="AANLkTi=v7dY7pzwcsPi+K8H=VWc6CVJeQWwUJfAwaM67_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] New interface code refactor<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 16:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per a discussion on the devel telecon a week or two ago, I have refactored
<br>
the opal/util/if.c code into a static framework (ala the installdirs
<br>
implementation) so that the various cases are dealt with in configure.m4
<br>
instead of a mass of interwoven #if-#else clauses. Jeff will undoubtedly do
<br>
some cleanup of the configury magic, but the basic functionality is ready
<br>
for initial review.
<br>
<p>For those who care, please clone and check the code at
<br>
<a href="http://bitbucket.org/rhc/ompi-if">http://bitbucket.org/rhc/ompi-if</a> to ensure that the correct opal/mca/if
<br>
components are being built for your environment, and that the
<br>
discovered interfaces are correct. Please let me know (up or down) so we can
<br>
get a feel for how close we are to bringing this back to the trunk.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Previous message:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
<li><strong>Reply:</strong> <a href="8427.php">Barrett, Brian W: "Re: [OMPI devel] New interface code refactor"</a>
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
