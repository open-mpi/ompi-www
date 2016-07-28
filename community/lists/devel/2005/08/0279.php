<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 22:54:21 2005" -->
<!-- isoreceived="20050901035421" -->
<!-- sent="Wed, 31 Aug 2005 23:54:15 -0400 (EDT)" -->
<!-- isosent="20050901035415" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="ltdl.h problem" -->
<!-- id="Pine.LNX.4.58.0508312352320.5104_at_localhost" -->
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
<strong>Date:</strong> 2005-08-31 22:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting from yesterday I'm unable to compile on several clusters. I check
<br>
the version of libtool, automake and autoconf and they all are the latest.
<br>
However, in all the component I get similar errors:
<br>
<p>In file included from
<br>
../../../../../ompi-trunk/opal/mca/maffinity/base/maffinity_base_close.c:21:
<br>
../../../../../ompi-trunk/opal/mca/base/base.h:23:18: ltdl.h: No such file
<br>
or directory
<br>
In file included from
<br>
../../../../../ompi-trunk/opal/mca/maffinity/base/maffinity_base_close.c:21:
<br>
../../../../../ompi-trunk/opal/mca/base/base.h:136: error: parse error
<br>
before &quot;lt_dlhandle&quot;
<br>
../../../../../ompi-trunk/opal/mca/base/base.h:137: warning: function
<br>
declaration isn't a prototype
<br>
make[4]: *** [maffinity_base_close.lo] Error 1
<br>
<p>&nbsp;&nbsp;Any idea ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0280.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="0281.php">George Bosilca: "Re:  ltdl.h problem"</a>
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
