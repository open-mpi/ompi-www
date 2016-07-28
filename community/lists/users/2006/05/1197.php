<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 16:33:06 2006" -->
<!-- isoreceived="20060502203306" -->
<!-- sent="Tue, 02 May 2006 22:32:56 +0200" -->
<!-- isosent="20060502203256" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[OMPI users] pnetcdf &amp;amp; Open MPI" -->
<!-- id="4457C1F8.4040400_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 16:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1198.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<li><strong>Previous message:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>are there any known problems with Open MPI (SVN rev. 9792) and Parallel
<br>
NetCDF (version 1.0.1)?
<br>
<p>I'm unable to make this combination work.
<br>
The tests distributed with the source of pnetcdf fail when building with
<br>
Open MPI.
<br>
<p>It looks as if the problem is not really due to Open MPI, but to the
<br>
included ROM-IO:
<br>
<p>All tests fail with the same error message:
<br>
<p>For example, test/test_double/test_write shows:
<br>
<p>Testing write ... Error: Unsupported datatype passed to
<br>
ADIOI_Count_contiguous_blocks
<br>
[lts.mydomain.be:26763] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
../../../../orte/mca/pls/base/pls_base_proxy.c at line 189
<br>
<p>They do work with mpich2 (1.0.3).
<br>
<p>I didn't try updating the version of ROM-IO included in the Open MPI SVN
<br>
repository [yet].
<br>
<p>&nbsp;&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;&nbsp;Dries
<br>
<p>PS. pnetcdf also doesn't build with the lam 7.1.1, because of a missing
<br>
MPI_Request_get_status implementation.
<br>
<p><p><p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1198.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<li><strong>Previous message:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1208.php">Robert Latham: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
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
