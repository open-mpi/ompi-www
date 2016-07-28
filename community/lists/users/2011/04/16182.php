<?
$subject_val = "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 06:49:37 2011" -->
<!-- isoreceived="20110407104937" -->
<!-- sent="Thu, 07 Apr 2011 06:51:37 -0400" -->
<!-- isosent="20110407105137" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers" -->
<!-- id="4D9D9739.2070301_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D9D8EFB.4090007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 06:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16181.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16179.php">Paul Kapinos: "[OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/07/2011 06:16 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We tried to build OpenMPI 1.5.3 including Support for Platform LSF 
</span><br>
<span class="quotelev1">&gt; using the Sun Studio (=Oracle Solaris Studio now) /12.2 and the 
</span><br>
<span class="quotelev1">&gt; configure stage failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Used flags:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-lsf --with-openib --with-devel-headers 
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt --enable-mpi-threads CFLAGS=&quot;-fast 
</span><br>
<span class="quotelev1">&gt; -xtarget=nehalem -m64&quot;   CXXFLAGS=&quot;-fast -xtarget=nehalem -m64&quot; 
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-fast -xtarget=nehalem&quot; -m64   FCFLAGS=&quot;-fast -xtarget=nehalem 
</span><br>
<span class="quotelev1">&gt; -m64&quot;   F77=f95 LDFLAGS=&quot;-fast -xtarget=nehalem -m64&quot; 
</span><br>
<span class="quotelev1">&gt; --prefix=/..../openmpi-1.5.3mt/linux64/studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note the Support for LSF enabled by --with-lsf). The compiler envvars 
</span><br>
<span class="quotelev1">&gt; are set as following:
</span><br>
<span class="quotelev1">&gt; $ echo $CC $FC $CXX
</span><br>
<span class="quotelev1">&gt; cc f95 CC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compiler info: (cc -V, CC -V)
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.11 Linux_i386 2010/08/13
</span><br>
<span class="quotelev1">&gt; CC: Sun C++ 5.11 Linux_i386 2010/08/13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The configure error was:
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; checking for lsb_launch in -lbat... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: LSF support requested (via --with-lsf) but not found.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. In the config.log (see the config.log.error) there is more info 
</span><br>
<span class="quotelev1">&gt; about the problem. crucial info is:
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; /opt/lsf/8.0/linux2.6-glibc2.3-x86_64/lib/libbat.so: undefined 
</span><br>
<span class="quotelev1">&gt; reference to `ceil'
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Googling vor `ceil' results e.g. in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cplusplus.com/reference/clibrary/cmath/ceil/">http://www.cplusplus.com/reference/clibrary/cmath/ceil/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so, the attached ceil.c example file *can* be compiled by &quot;CC&quot; (the 
</span><br>
<span class="quotelev1">&gt; Studio C++ compiler), but *cannot* be compiled using &quot;cc&quot; (the Studio 
</span><br>
<span class="quotelev1">&gt; C compiler).
</span><br>
<span class="quotelev1">&gt; $ CC ceil.c
</span><br>
<span class="quotelev1">&gt; $ cc ceil.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
Did you try to link in the math library -lm?  When I did this your test 
<br>
program worked for me and that actually is the first test that the 
<br>
configure does.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Looking into configure.log and searching on `ceil' results: there 
</span><br>
<span class="quotelev1">&gt; was a check for the availability of `ceil' for the C compiler (see 
</span><br>
<span class="quotelev1">&gt; config.log.ceil). This check says `ceil' is *available* for the &quot;cc&quot; 
</span><br>
<span class="quotelev1">&gt; Compiler, which is *wrong*, cf. (4).
</span><br>
See above, it actually is right when you link in the math lib.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is there an error in the configure stage? Or either the checks in 
</span><br>
<span class="quotelev1">&gt; config.log.ceil does not rely on the avilability of the `ceil' funcion 
</span><br>
<span class="quotelev1">&gt; in the C compiler?
</span><br>
It looks to me like the lbat configure test is not linking in the math lib.
<br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Note in in the past we build many older versions of OpenMPI with 
</span><br>
<span class="quotelev1">&gt; no support for LSF and no such problems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16182/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16182/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16181.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16179.php">Paul Kapinos: "[OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
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
