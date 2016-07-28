<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 12:57:12 2006" -->
<!-- isoreceived="20061012165712" -->
<!-- sent="Thu, 12 Oct 2006 10:57:04 -0600" -->
<!-- isosent="20061012165704" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] Issues with 1.2 and intel/portland compilers" -->
<!-- id="452E73E0.4010408_at_cora.nwra.com" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 12:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Previous message:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Reply:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying to build the openmpi 1.2 branch with the Intel and 
<br>
Portland Fortran compilers and was having trouble using their 
<br>
-i-static/-Bstatic_pgi options.
<br>
<p>First off, it seems the only way to get these options to appear in the 
<br>
necessary link lines is to add them to the compiler variable itself, e.g.:
<br>
<p>FC=&quot;ifort -i-static&quot;
<br>
<p>However, this causes problems with some configure checks in setting the 
<br>
OMPI_F90_ABSOLUTE and similar variables, because &quot;which&quot; complains about 
<br>
the extra arguments.  I ended up making the following change:
<br>
<p>--- openmpi-1.2-20061010/config/ompi_setup_f77.m4.which 2006-10-12 
<br>
09:29:04.534724449 -0600
<br>
+++ openmpi-1.2-20061010/config/ompi_setup_f77.m4       2006-10-12 
<br>
09:29:36.840254496 -0600
<br>
@@ -59,7 +59,7 @@
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_F77=&quot;$F77&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BASEF77=&quot;`basename $OMPI_F77`&quot;
<br>
-    OMPI_F77_ABSOLUTE=&quot;`which $F77`&quot;
<br>
+    OMPI_F77_ABSOLUTE=&quot;`which $BASEF77`&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$OMPI_WANT_F77_BINDINGS&quot; = &quot;0&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([*** Fortran 77 bindings disabled by user])
<br>
--- openmpi-1.2-20061010/config/ompi_setup_f90.m4.which 2006-10-12 
<br>
09:29:11.059841268 -0600
<br>
+++ openmpi-1.2-20061010/config/ompi_setup_f90.m4       2006-10-12 
<br>
09:29:49.770468395 -0600
<br>
@@ -88,7 +88,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_WANT_F90_BINDINGS=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_F90=&quot;$FC&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BASEF90=&quot;`basename $FC`&quot;
<br>
-        OMPI_F90_ABSOLUTE=&quot;`which $FC`&quot;
<br>
+        OMPI_F90_ABSOLUTE=&quot;`which $BASEF90`&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;# make sure the compiler actually works, if not cross-compiling
<br>
<p>which works for a single extra argument because basename doesn't 
<br>
complain.  However, basename does complain if you give it more 
<br>
arguments.  Something more general might be:
<br>
<p>BASEF90=`echo $FC | sed 's/ .*//'`
<br>
BASEF90=&quot;`basename $BASEF90`&quot;
<br>
OMPI_F90_ABSOLUTE=&quot;`which $BASEF90`&quot;
<br>
<p>I'm not sure what the most cross platform way to return only the first 
<br>
argument is.
<br>
<p>Of course, if there was a way to get these passed to the appropriate 
<br>
link stages, we could avoid this.  But it looks like libtool strips the 
<br>
-i-static argument and doesn't pass it on to the link command, not sure 
<br>
about the -Bstatic_pgi argument.
<br>
<p><pre>
-- 
Orion Poplawski
System Administrator                  303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Previous message:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<li><strong>Reply:</strong> <a href="1110.php">Ralf Wildenhues: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
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
