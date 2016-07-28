<?
$subject_val = "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 13:56:10 2009" -->
<!-- isoreceived="20090309175610" -->
<!-- sent="Mon, 9 Mar 2009 10:55:55 -0700" -->
<!-- isosent="20090309175555" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F208CF15B5_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> [OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge<br>
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 13:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<li><strong>Previous message:</strong> <a href="8368.php">Ralph Castain: "Re: [OMPI users] only see ras info doing ompi_info for sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<li><strong>Reply:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The building openmpi with sge faq says :
<br>
<p>&nbsp;
<br>
<p>For Open MPI v1.2, SGE support is built automatically; there is nothing
<br>
that you need to do. Note that SGE support first appeared in v1.2. 
<br>
<p>NOTE: For Open MPI v1.3, or starting with trunk revision number r16422,
<br>
you will need to explicitly request the SGE support with the
<br>
&quot;--with-sge&quot; command line switch to Open MPI's configure script. For
<br>
example: 
<br>
<p><p>shell$ ./configure --with-sge
<br>
<p>After Open MPI is installed, you should see two components named
<br>
&quot;gridengine&quot;: 
<br>
<p><p>shell$ ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component
<br>
v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component
<br>
v1.3)
<br>
<p>&nbsp;
<br>
<p>Specific frameworks and version numbers may vary, depending on your
<br>
version of Open MPI.
<br>
<p>&nbsp;
<br>
<p>Under running with sge :
<br>
<p>&nbsp;
<br>
<p>o verify if support for SGE is configured into your Open MPI
<br>
installation, run ompi_info as shown below and look for gridengine. The
<br>
components you will see are slightly different between v1.2 and v1.3. 
<br>
<p>For Open MPI 1.2: 
<br>
<p><p>shell$ ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.0, Component
<br>
v1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.0, Component
<br>
v1.2)
<br>
<p>For Open MPI 1.3: 
<br>
<p><p>shell$ ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component
<br>
v1.3)
<br>
<p>&nbsp;
<br>
<p>I believe the building portion should be modified to be consistent with
<br>
the running portion.
<br>
<p>&nbsp;
<br>
<p>Thanx,
<br>
<p>&nbsp;
<br>
<p>Bernie Borenstein
<br>
<p>The Boeing Company
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<li><strong>Previous message:</strong> <a href="8368.php">Ralph Castain: "Re: [OMPI users] only see ras info doing ompi_info for sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<li><strong>Reply:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
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
