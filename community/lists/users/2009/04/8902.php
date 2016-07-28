<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 10:53:55 2009" -->
<!-- isoreceived="20090414145355" -->
<!-- sent="Tue, 14 Apr 2009 08:53:48 -0600" -->
<!-- isosent="20090414145348" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E4A37C.6080602_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E49E22.9040502_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 10:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>In reply to:</strong> <a href="8897.php">Prentice Bisbal: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Orion,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no trouble getting thread support during configure with PGI 8.0-3
</span><br>
<p>I'm mixing the pgf and gcc compilers which causes the trouble.
<br>
<p>Here is the config.log entry for the F77 test:
<br>
<p>configure:65969: checking if F77 compiler and POSIX threads work as is
<br>
configure:66066: gcc -DNDEBUG -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 
<br>
-mtune=generic -fPIC -finline-functions -fno-strict-aliasing -I. -c 
<br>
conftest.c
<br>
conftest.c: In function 'pthreadtest_':
<br>
conftest.c:12: warning: null argument where non-null required (argument 3)
<br>
conftest.c:14: warning: null argument where non-null required (argument 1)
<br>
conftest.c:16: warning: null argument where non-null required (argument 1)
<br>
conftest.c:16: warning: null argument where non-null required (argument 3)
<br>
configure:66073: $? = 0
<br>
configure:66083: pgf95 -fastsse -fPIC conftestf.f conftest.o -o conftest 
<br>
-Wl,-z,noexecstack -lnsl -lutil  -lm
<br>
conftestf.f:
<br>
conftest.o:(.data.DW.ref.__gcc_personality_v0[DW.ref.__gcc_personality_v0]+0x0): 
<br>
undefined reference to `__gcc_personality_v0'
<br>
<p>Looks like I need link to -lgcc_eh some how.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>In reply to:</strong> <a href="8897.php">Prentice Bisbal: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8903.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8904.php">Gus Correa: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
