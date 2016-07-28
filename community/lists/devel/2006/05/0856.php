<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 07:26:40 2006" -->
<!-- isoreceived="20060508112640" -->
<!-- sent="Mon, 08 May 2006 13:28:42 +0200" -->
<!-- isosent="20060508112842" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[OMPI devel] typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="445F2B6A.9080001_at_cs.kuleuven.be" -->
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
<strong>Date:</strong> 2006-05-08 07:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>&nbsp;&nbsp;When trying to build Open MPI (r9843) with romio configured with pfvs2 support,
<br>
I noticed that the configure from romio was failing because of missing libraries.
<br>
<p>Because the pvfs2 library was not in the standard search path, I needed to specify custom
<br>
LDFLAGS and LIBS for the toplevel Open MPI configure. However, these were not passed on
<br>
to the configure script from romio.
<br>
<p>Probably because of a misspelled LDFLAGS in the following code fragment
<br>
(mca/io/romio/configure.m4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;io_romio_flags=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$cross_compiling&quot; = &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test ! -z $build], [io_romio_flags=&quot;$io_romio_flags --build=$build&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z $host], [io_romio_flags=&quot;$io_romio_flags --host=$host&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z $target], [io_romio_flags=&quot;$io_romio_flags
<br>
--target=$target&quot;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;io_romio_flags=&quot;$io_romio_flags CFLAGS=&quot;'&quot;'&quot;$CFLAGS&quot;'&quot;'&quot;
<br>
<p>CPPFLAGS=&quot;'&quot;'&quot;$CPPFLAGS&quot;'&quot;'&quot; FFLAGS=&quot;'&quot;'&quot;$FFLAGS&quot;'&quot;'&quot; LDFLAGS=&quot;'&quot;'&quot;$LSFLAGS&quot;'&quot;'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^
<br>
<p>--$io_romio_shared-shared --$io_romio_static-static $io_romio_flags $io_romio_prefix_arg
<br>
--with-mpi=open_mpi&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_show_subtitle &quot;Configuring ROMIO distribution&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CONFIG_SUBDIR([ompi/mca/io/romio/romio],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$io_romio_flags],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[io_romio_happy=1], [io_romio_happy=0])
<br>
<p><p>As a consequence, romio failed to configure properly
<br>
(C compiler unable to create executables, because of -lpvfs2 in LIBS and no
<br>
LDFLAGS specifying -L...),
<br>
&quot;io_romio_happy&quot; was set to 0 and
<br>
I ended up with an Open MPI build looking and installing ok but
<br>
failing every MPI_File_xxxx call.
<br>
<p>I searched the entire code for other references to 'LSFLAGS', but couldn't find any.
<br>
This probably means LSFLAGS is a typo? (After all, S is next to D on the keyboard ;-)
<br>
Anyway, changing LSFLAGS to LDFLAGS makes everything work again.
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p>PS. Shouldn't configure warn if no io mca can be built?
<br>
Granted, configure cannot know if another one can be loaded dynamically later on,
<br>
but I did specify --enable-io-romio (which actually is the default), so an error/warning
<br>
would be a appreciated. Otherwise, if you happen to miss the one-line output in
<br>
the total configure output mentioning that romio will not be built, you end up
<br>
with an MPI implementation returning an error code for every MPI_File call.
<br>
<p>I only found out that no MPI-IO was being included in Open MPI after trying to debug a non-existent
<br>
function ;-)
<br>
<p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
