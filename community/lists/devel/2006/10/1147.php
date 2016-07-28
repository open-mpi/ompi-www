<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 12:24:19 2006" -->
<!-- isoreceived="20061025162419" -->
<!-- sent="Wed, 25 Oct 2006 18:24:32 +0200" -->
<!-- isosent="20061025162432" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] IPv6 code uploaded to svn" -->
<!-- id="20061025162432.GB22766_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 12:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1146.php">Brian W. Barrett: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've uploaded my current IPv6 code to /tmp/adi-ipv6/.
<br>
<p>The checkin was splitted to ease the review.
<br>
<p>What has changed?:
<br>
<p>&nbsp;OPAL: (changeset 12308)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The OPAL layer can now detect IPv6 addresses on Linux and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Solaris. The functions in if.c were rewritten to handle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the new address structures.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;See that I do not use the kernel index for NIC enumeration,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;because there is no 1:1 mapping between the index and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the address.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I've also switched to CIDR notation (like 10.0.0.1/8 instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of 10.0.0.1/255.0.0.0) to be able to use the same code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for IPv6 (which needs /0 .. /128)
<br>
<p>&nbsp;ORTE:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca/rds: (changeset 12309)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This is an extended version of the hostfile parser.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It does support IPv6 addresses, but even invalid onces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;like 2001::dead::1 (&quot;::&quot; is only allowed once).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I don't care, they get catched by the lookup functions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca/oob/tcp: (changeset 12310)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This is &quot;my&quot; implementation of the oob/tcp component.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It is based on the latest version from the v1.2 branch.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The new thread listener isn't already ported to IPv6,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;we could do this once the code is in the trunk/v1.2.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;As you can see, I've duplicated the listening sockets
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and the corresponding events. That's why I also extended
<br>
&nbsp;&nbsp;&nbsp;&nbsp;some functions by a new parameter &quot;sd&quot; in order to know
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to which socket (either tcp_listen_sd or tcp6_listen_sd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the function should be applied.
<br>
<p><p>&nbsp;OMPI: (changeset 12311)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;A straight-forward implementation very similar to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;oob/tcp code. I haven't tested the --disable-ipv6 case,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this still has to be done. The address selection code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;may need some improvements, I currently use my own
<br>
&nbsp;&nbsp;&nbsp;&nbsp;function from oob_tcp_addr.c, but it's probably better
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to ask is_ipv4_private than using (!is_ipv4_public).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;There are still some changes to be done to port it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to MCA_BTL_BASE_VERSION_1_0_1, I haven't noticed this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;until the checkin. I'll do this on Friday.
<br>
<p><p>To sum it up: I believe the code is ready to go into v1.2,
<br>
but it should be reviewed, tested, extended...
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Bessere Qualit&#228;tskontrolle bei Hundefutter! Kinder sollten zweimal
j&#228;hrlich lebensmittelchemisch untersucht werden.  (aus de.talk.jokes)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1146.php">Brian W. Barrett: "Re: [OMPI devel] New oob/tcp?"</a>
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
