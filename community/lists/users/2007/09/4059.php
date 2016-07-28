<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 15:37:15 2007" -->
<!-- isoreceived="20070925193715" -->
<!-- sent="Tue, 25 Sep 2007 15:37:03 -0400" -->
<!-- isosent="20070925193703" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Cray XT4 CNL" -->
<!-- id="C31EDB9F.EB7E%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F8D3B7.4060301_at_csc.fi" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 15:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>In reply to:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey did the port of Open MPI to CNL.  Here is the config line I have
<br>
used to build
<br>
&nbsp;on the Cray XT4:
<br>
<p>./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc
<br>
CXX=/opt/xt-pe/default/bin/snos64/linux-pgCC
<br>
F77=/opt/xt-pe/default/bin/snos64/linux-pgf90
<br>
FC=/opt/xt-pe/default/bin/snos64/linux-pgf77
<br>
CFLAGS=-I/opt/xt-pe/default/include/ CPPFLAGS=-I/opt/xt-pe/default/include/
<br>
FCFLAGS=-I/opt/xt-pe/default/include/ FFLAGS=-I/opt/xt-pe/default/include/
<br>
LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=-lpct -lalpslli -lalpsutil
<br>
--build=x86_64-unknown-linux-gnu --host=x86_64-cray-linux-gnu
<br>
--with-platform=../contrib/platform/cray_xt3_romio
<br>
--with-io-romio-flags=--disable-aio build_alias=x86_64-unknown-linux-gnu
<br>
host_alias=x86_64-cray-linux-gnu --enable-ltdl-convenience --no-recursion
<br>
--prefix=/na2_apps/OpenMPI/xt-2.0.20/1.2/ompi/P2
<br>
<p>Rich
<br>
<p><p>On 9/25/07 5:24 AM, &quot;Olli-Pekka Lehto&quot; &lt;oplehto_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone experimented with building OpenMPI for Cray XT4 with Compute
</span><br>
<span class="quotelev1">&gt; Node Linux (CNL) OS? My first attempt to build it out-of-the-box using
</span><br>
<span class="quotelev1">&gt; the '--with-portals-config=xt3' switch failed with the complaint:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from common_portals.c:30:
</span><br>
<span class="quotelev1">&gt; common_portals_crayxt3.c:19:35: catamount/cnos_mpi_os.h: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be great to get this working because it could potentially allow
</span><br>
<span class="quotelev1">&gt; for cross-platform compatibility for parallel applications between our
</span><br>
<span class="quotelev1">&gt; clusters and XT4 in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Olli-Pekka
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Olli-Pekka Lehto, Systems Specialist, Special Computing, CSC
</span><br>
<span class="quotelev1">&gt; PO Box 405 02101 Espoo, Finland; tel +358 9 457 2215, fax +358 9 4572302
</span><br>
<span class="quotelev1">&gt; CSC is the Finnish IT Center for Science, www.csc.fi,
</span><br>
<span class="quotelev1">&gt; e-mail: Olli-Pekka.Lehto_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>In reply to:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
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
