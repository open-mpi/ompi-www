<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:29:10 2008" -->
<!-- isoreceived="20081031202910" -->
<!-- sent="Fri, 31 Oct 2008 16:28:57 -0400" -->
<!-- isosent="20081031202857" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="A728B140-5970-40A4-AA16-DF815A24A7AE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810311220y2907cebboa1f8b145916e9129_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo,
<br>
<p>I guess that if you disable the vt contrib package, this is take you  
<br>
one step further :) Hopefully at the end of the compile stage ... and  
<br>
at the beginning of troubles with running the cygwin parallel  
<br>
applications ...
<br>
<p>Meanwhile, there is a special option to disable contrib packages.  
<br>
Please add --enable-contrib-no-build=vt to your configure line and  
<br>
this should do the trick.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 31, 2008, at 3:20 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Oct 30, 2008 at 9:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry for taking too long to respond. As you mentioned, config
</span><br>
<span class="quotelev1">&gt; takes a veeeeeeery long time in cygwin, and then the install itself
</span><br>
<span class="quotelev1">&gt; takes many ties that :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As Jeff mentioned this component is not required on Windows. You  
</span><br>
<span class="quotelev2">&gt;&gt; can disable
</span><br>
<span class="quotelev2">&gt;&gt; it completely in Open MPI and everything will continue to work  
</span><br>
<span class="quotelev2">&gt;&gt; correctly.
</span><br>
<span class="quotelev2">&gt;&gt; Please add --enable-mca-no-build=memory_mallopt o maybe the more  
</span><br>
<span class="quotelev2">&gt;&gt; generic (as
</span><br>
<span class="quotelev2">&gt;&gt; there is no need for any memory manager on Windows
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tried, doesn't quite work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I configure with &quot;--enable-mca-no-build=memory&quot;, the config dies  
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *** Final output
</span><br>
<span class="quotelev1">&gt;  configure: error: conditional &quot;OMPI_WANT_EXTERNAL_PTMALLOC2&quot; was
</span><br>
<span class="quotelev1">&gt; never defined.
</span><br>
<span class="quotelev1">&gt;  Usually this means the macro was only invoked conditionally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if i try with &quot;--enable-mca-no-build=memory_mallopt&quot;, the
</span><br>
<span class="quotelev1">&gt; configuration script runs just fine, but the compilation dies when
</span><br>
<span class="quotelev1">&gt; compiling &quot;mca/paffinity/windows&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  libtool: compile:  gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include -I../../../..
</span><br>
<span class="quotelev1">&gt;  /ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -O3
</span><br>
<span class="quotelev1">&gt;  -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;  .deps/paffinity_windows_module.Tpo -c paffinity_windows_module.c
</span><br>
<span class="quotelev1">&gt; -DDLL_EXPORT -DPIC -o
</span><br>
<span class="quotelev1">&gt;  .libs/paffinity_windows_module.o
</span><br>
<span class="quotelev1">&gt;  paffinity_windows_module.c:44: error: parse error before &quot;sys_info&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [... and then a bunch of messages after that, all related to
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c, which...]
</span><br>
<span class="quotelev1">&gt;  [... I think are all related to this first one...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I thought that I can live without processor affinity or even
</span><br>
<span class="quotelev1">&gt; memory affinity, so I tried using
</span><br>
<span class="quotelev1">&gt; &quot; --enable-mca-no-build=memory_mallopt,maffinity,paffinity&quot;, and the
</span><br>
<span class="quotelev1">&gt; configuration went all smoothly. The compilation... You guessed, died
</span><br>
<span class="quotelev1">&gt; again. But this time it was something that had bit me before:
</span><br>
<span class="quotelev1">&gt; RTLD_NEXT, which is required by one contributed package (vt). (See my
</span><br>
<span class="quotelev1">&gt; previous message to Jeff and the list.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My next attempt will be to remove this package, and see how far I can
</span><br>
<span class="quotelev1">&gt; get... But I'm getting there :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is possible to have a native version of Open MPI on Windows.  
</span><br>
<span class="quotelev2">&gt;&gt; There are
</span><br>
<span class="quotelev2">&gt;&gt; two ways to achieve this. First, install SFU, and compile there. It  
</span><br>
<span class="quotelev2">&gt;&gt; worked
</span><br>
<span class="quotelev2">&gt;&gt; last time I checked, but it's not the solution I prefer. Second,  
</span><br>
<span class="quotelev2">&gt;&gt; you can
</span><br>
<span class="quotelev2">&gt;&gt; install the express version of the Microsoft Visual Studio (which  
</span><br>
<span class="quotelev2">&gt;&gt; is free),
</span><br>
<span class="quotelev2">&gt;&gt; and set your PATH, LIB and INCLUDE correctly to point to the  
</span><br>
<span class="quotelev2">&gt;&gt; installation,
</span><br>
<span class="quotelev2">&gt;&gt; and then you can use the cl compiler to build Open MPI even on  
</span><br>
<span class="quotelev2">&gt;&gt; Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is true, but it seems more complicated for the regular user than
</span><br>
<span class="quotelev1">&gt; installing OpenMPI (assuming I can figure out the correct combination
</span><br>
<span class="quotelev1">&gt; of options) Also, our program is actually made for unix, and as a
</span><br>
<span class="quotelev1">&gt; convenience it *can* be installed in Cygwin, but I'm not sure how it
</span><br>
<span class="quotelev1">&gt; would work with a native Windows OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways... I fell like I'm getting closer.. Will keep trying during  
</span><br>
<span class="quotelev1">&gt; the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for all the help! (That goes to Jeff too)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Gustavo.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7172/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
