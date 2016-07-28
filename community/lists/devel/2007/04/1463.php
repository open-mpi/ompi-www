<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 29 09:57:50 2007" -->
<!-- isoreceived="20070429135750" -->
<!-- sent="Sun, 29 Apr 2007 16:00:17 +0200" -->
<!-- isosent="20070429140017" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] sockaddr* vs. sockaddr_storage*" -->
<!-- id="20070429140016.GE14385_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2007-04-29 10:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Josh Hursey: "[OMPI devel] Checkpoint/Restart Process Fault Tolerance Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, especially bosilca (George?)
<br>
<p>r14544 broke the IPv6 support (see Ticket #1008). I've committed a quick
<br>
patch, but I guess we (George and me?) will have to look closer in order
<br>
to provide the desired functionality.
<br>
<p>There's another question concerning r14544: why did you change
<br>
sockaddr_storage* to sockaddr* for some btl/tcp functions? Is there
<br>
something special about sockaddr*? For me, sockaddr_storage is a
<br>
complete replacement for sockaddr... we also have the necessary defines
<br>
in ipv6compat.h, so we could always make use of ss_family.
<br>
<p><p>Cheerio
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="1462.php">Josh Hursey: "[OMPI devel] Checkpoint/Restart Process Fault Tolerance Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1464.php">George Bosilca: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
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
