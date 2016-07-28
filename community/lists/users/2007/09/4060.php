<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 15:50:58 2007" -->
<!-- isoreceived="20070925195058" -->
<!-- sent="Tue, 25 Sep 2007 13:55:10 -0600" -->
<!-- isosent="20070925195510" -->
<!-- name="Howard Pritchard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Cray XT4 CNL" -->
<!-- id="46F9679E.9030005_at_cray.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C31EDB9F.EB7E%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Howard Pritchard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 15:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Olli-Pekka et al,
<br>
<p>The cnos_mpi_os.h include file ought to be in
<br>
<p>$CATAMOUNT_DIR/catamount/linux/include
<br>
<p>so if you add -I $CATAMOUNT_DIR/catamount/linux/include
<br>
in the configure line for CFLAGS perhaps it will work.
<br>
<p>CATAMOUNT_DIR environment variable is defined when you load one
<br>
of the PrgEnv and the xtpe-target-cnl modules.
<br>
<p>Make sure you have xtpe-target-cnl module loaded otherwise you
<br>
will be building for QK nodes.
<br>
<p>Good luck,
<br>
<p>Howard
<br>
<p>Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Josh Hursey did the port of Open MPI to CNL.  Here is the config line 
</span><br>
<span class="quotelev1">&gt; I have used to build
</span><br>
<span class="quotelev1">&gt;  on the Cray XT4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc 
</span><br>
<span class="quotelev1">&gt; CXX=/opt/xt-pe/default/bin/snos64/linux-pgCC 
</span><br>
<span class="quotelev1">&gt; F77=/opt/xt-pe/default/bin/snos64/linux-pgf90 
</span><br>
<span class="quotelev1">&gt; FC=/opt/xt-pe/default/bin/snos64/linux-pgf77 
</span><br>
<span class="quotelev1">&gt; CFLAGS=-I/opt/xt-pe/default/include/ 
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=-I/opt/xt-pe/default/include/ 
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-I/opt/xt-pe/default/include/ 
</span><br>
<span class="quotelev1">&gt; FFLAGS=-I/opt/xt-pe/default/include/ 
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=-lpct -lalpslli 
</span><br>
<span class="quotelev1">&gt; -lalpsutil  --build=x86_64-unknown-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-cray-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --with-platform=../contrib/platform/cray_xt3_romio 
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags=--disable-aio 
</span><br>
<span class="quotelev1">&gt; build_alias=x86_64-unknown-linux-gnu host_alias=x86_64-cray-linux-gnu 
</span><br>
<span class="quotelev1">&gt; --enable-ltdl-convenience --no-recursion 
</span><br>
<span class="quotelev1">&gt; --prefix=/na2_apps/OpenMPI/xt-2.0.20/1.2/ompi/P2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/25/07 5:24 AM, &quot;Olli-Pekka Lehto&quot; &lt;oplehto_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Has anyone experimented with building OpenMPI for Cray XT4 with
</span><br>
<span class="quotelev1">&gt;     Compute
</span><br>
<span class="quotelev1">&gt;     Node Linux (CNL) OS? My first attempt to build it out-of-the-box using
</span><br>
<span class="quotelev1">&gt;     the '--with-portals-config=xt3' switch failed with the complaint:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In file included from common_portals.c:30:
</span><br>
<span class="quotelev1">&gt;     common_portals_crayxt3.c:19:35: catamount/cnos_mpi_os.h: No such
</span><br>
<span class="quotelev1">&gt;     file or
</span><br>
<span class="quotelev1">&gt;     directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It would be great to get this working because it could potentially
</span><br>
<span class="quotelev1">&gt;     allow
</span><br>
<span class="quotelev1">&gt;     for cross-platform compatibility for parallel applications between our
</span><br>
<span class="quotelev1">&gt;     clusters and XT4 in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     best regards,
</span><br>
<span class="quotelev1">&gt;     Olli-Pekka
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Olli-Pekka Lehto, Systems Specialist, Special Computing, CSC
</span><br>
<span class="quotelev1">&gt;     PO Box 405 02101 Espoo, Finland; tel +358 9 457 2215, fax +358 9
</span><br>
<span class="quotelev1">&gt;     4572302
</span><br>
<span class="quotelev1">&gt;     CSC is the Finnish IT Center for Science, www.csc.fi,
</span><br>
<span class="quotelev1">&gt;     e-mail: Olli-Pekka.Lehto_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
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
