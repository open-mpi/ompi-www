<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 02:15:34 2005" -->
<!-- isoreceived="20051123071534" -->
<!-- sent="Wed, 23 Nov 2005 02:15:30 -0500 (Eastern Standard Time)" -->
<!-- isosent="20051123071530" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="ltdl.h problem" -->
<!-- id="Pine.WNT.4.63.0511230205360.3464_at_bosilca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 02:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I continue to have the same problem with the missing ltdl.h header I 
<br>
reported few days ago, I spend some time today to dig a little bit inside 
<br>
to find out what and how happens. Finally, I figure out the problem. It 
<br>
happens only after the last set of changes on the Makefile.am and only on 
<br>
systems where there is not a ltdl.h installed on a default location. 
<br>
Otherwise ... on systems where the ltdl.h is installed ... the ugliest 
<br>
things may happens. We can use our ltdl.h in some directories (like the 
<br>
opal base) and the system one in others (because a missing -I). How ? 
<br>
Simply because most of the base components require the 
<br>
opal/mca/mca_base_component_repository.h include. In this file at line 27 
<br>
there is a include &quot;ltdl.h&quot; supposely protected by the OMPI_WANT_LIBLTDL. 
<br>
This define is always true as it come from the ompi_config.h so the ltdl.h 
<br>
is always required. Now on system where this file does not exist on some 
<br>
system include directories we are supposed to get the one we have ... 
<br>
except that the -I for our include is not added in all the base 
<br>
directories after the last set of changes to the Makefile.am.
<br>
<p>Now your turn to have fun ... and to bring back a consistent behaviour :)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0543.php">Galen M. Shipman: "Re:  mvapi change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0545.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0547.php">Brian Barrett: "Re:  ltdl.h problem"</a>
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
