<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 15:21:01 2008" -->
<!-- isoreceived="20081031192101" -->
<!-- sent="Fri, 31 Oct 2008 15:20:56 -0400" -->
<!-- isosent="20081031192056" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810311220y2907cebboa1f8b145916e9129_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3EB9ADCB-7031-4133-96A6-CE4A39BE623B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 15:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7167.php">Gustavo Seabra: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 30, 2008 at 9:04 AM, George Bosilca wrote:
<br>
<p>Hi George,
<br>
<p>I'm sorry for taking too long to respond. As you mentioned, config
<br>
takes a veeeeeeery long time in cygwin, and then the install itself
<br>
takes many ties that :-(
<br>
<p><span class="quotelev1">&gt; As Jeff mentioned this component is not required on Windows. You can disable
</span><br>
<span class="quotelev1">&gt; it completely in Open MPI and everything will continue to work correctly.
</span><br>
<span class="quotelev1">&gt; Please add --enable-mca-no-build=memory_mallopt o maybe the more generic (as
</span><br>
<span class="quotelev1">&gt; there is no need for any memory manager on Windows
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=memory.
</span><br>
<p>Tried, doesn't quite work:
<br>
<p>If I configure with &quot;--enable-mca-no-build=memory&quot;, the config dies with:
<br>
<p>&nbsp;&nbsp;*** Final output
<br>
&nbsp;&nbsp;configure: error: conditional &quot;OMPI_WANT_EXTERNAL_PTMALLOC2&quot; was
<br>
never defined.
<br>
&nbsp;&nbsp;Usually this means the macro was only invoked conditionally.
<br>
<p>Now, if i try with &quot;--enable-mca-no-build=memory_mallopt&quot;, the
<br>
configuration script runs just fine, but the compilation dies when
<br>
compiling &quot;mca/paffinity/windows&quot;:
<br>
<p>&nbsp;&nbsp;libtool: compile:  gcc -DHAVE_CONFIG_H -I.
<br>
-I../../../../opal/include -I../../../../orte/include -I../../../..
<br>
&nbsp;&nbsp;/ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
<br>
-D_REENTRANT -O3
<br>
&nbsp;&nbsp;-DNDEBUG -finline-functions -fno-strict-aliasing -MT
<br>
paffinity_windows_module.lo -MD -MP -MF
<br>
&nbsp;&nbsp;.deps/paffinity_windows_module.Tpo -c paffinity_windows_module.c
<br>
-DDLL_EXPORT -DPIC -o
<br>
&nbsp;&nbsp;.libs/paffinity_windows_module.o
<br>
&nbsp;&nbsp;paffinity_windows_module.c:44: error: parse error before &quot;sys_info&quot;
<br>
<p>&nbsp;&nbsp;[... and then a bunch of messages after that, all related to
<br>
paffinity_windows_module.c, which...]
<br>
&nbsp;&nbsp;[... I think are all related to this first one...]
<br>
<p>Finally, I thought that I can live without processor affinity or even
<br>
memory affinity, so I tried using
<br>
&quot; --enable-mca-no-build=memory_mallopt,maffinity,paffinity&quot;, and the
<br>
configuration went all smoothly. The compilation... You guessed, died
<br>
again. But this time it was something that had bit me before:
<br>
RTLD_NEXT, which is required by one contributed package (vt). (See my
<br>
previous message to Jeff and the list.)
<br>
<p>My next attempt will be to remove this package, and see how far I can
<br>
get... But I'm getting there :-)
<br>
<p><span class="quotelev1">&gt; It is possible to have a native version of Open MPI on Windows. There are
</span><br>
<span class="quotelev1">&gt; two ways to achieve this. First, install SFU, and compile there. It worked
</span><br>
<span class="quotelev1">&gt; last time I checked, but it's not the solution I prefer. Second, you can
</span><br>
<span class="quotelev1">&gt; install the express version of the Microsoft Visual Studio (which is free),
</span><br>
<span class="quotelev1">&gt; and set your PATH, LIB and INCLUDE correctly to point to the installation,
</span><br>
<span class="quotelev1">&gt; and then you can use the cl compiler to build Open MPI even on Windows.
</span><br>
<p>That is true, but it seems more complicated for the regular user than
<br>
installing OpenMPI (assuming I can figure out the correct combination
<br>
of options) Also, our program is actually made for unix, and as a
<br>
convenience it *can* be installed in Cygwin, but I'm not sure how it
<br>
would work with a native Windows OpenMPI.
<br>
<p>Anyways... I fell like I'm getting closer.. Will keep trying during the weekend.
<br>
<p>Thanks a lot for all the help! (That goes to Jeff too)
<br>
<p>Cheers,
<br>
Gustavo.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7167.php">Gustavo Seabra: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
