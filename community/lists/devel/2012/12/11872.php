<?
$subject_val = "[OMPI devel] Error compiling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 23 10:39:54 2012" -->
<!-- isoreceived="20121223153954" -->
<!-- sent="Sun, 23 Dec 2012 10:39:45 -0500" -->
<!-- isosent="20121223153945" -->
<!-- name="R C" -->
<!-- email="recifx_at_[hidden]" -->
<!-- subject="[OMPI devel] Error compiling" -->
<!-- id="CAD_Xbc4-1mjrJPYWFKqXC3U5rTQ59SiY9G0afq=Vm8=r0+HKXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Error compiling<br>
<strong>From:</strong> R C (<em>recifx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-23 10:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11871.php">Jeff Squyres: "Re: [OMPI devel] Open MPI planned outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to compile the development version of openmpi obtained through
<br>
svn yesterday, on a AMD64 computer running Ubuntu 12.10 (gcc 4.7.2)
<br>
with valgrind-3.8.1 installed in /usr/local
<br>
<p>After ./autogen.pl. I ran configure:
<br>
../configure FC=gfortran --with-mpi-f90-size=medium
<br>
--with-f90-max-array-dim=6 --with-valgrind=/usr/local
<br>
<p>however 'make all' exited with the error:
<br>
<p>make[2]: Entering directory
<br>
`/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
<br>
&nbsp;&nbsp;CC     orte-clean.o
<br>
&nbsp;&nbsp;CCLD   orte-clean
<br>
/usr/bin/ld: orte-clean.o: undefined reference to symbol
<br>
'opal_show_help_string'
<br>
/usr/bin/ld: note: 'opal_show_help_string' is defined in DSO
<br>
/home/rc/Downloads/ompi/objd/opal/.libs/libopen-pal.so.0 so try adding it
<br>
to the linker command line
<br>
/home/rc/Downloads/ompi/objd/opal/.libs/libopen-pal.so.0: could not read
<br>
symbols: Invalid operation
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [orte-clean] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/rc/Downloads/ompi/objd/orte/tools/orte-clean'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/rc/Downloads/ompi/objd/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I checked libopen-pal.so.0 using nm.
<br>
<p>Any suggestions to get the compilation working would be appreciated.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Previous message:</strong> <a href="11871.php">Jeff Squyres: "Re: [OMPI devel] Open MPI planned outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
<li><strong>Reply:</strong> <a href="11873.php">Ralph Castain: "Re: [OMPI devel] Error compiling"</a>
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
