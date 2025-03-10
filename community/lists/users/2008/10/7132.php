<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 09:04:55 2008" -->
<!-- isoreceived="20081030130455" -->
<!-- sent="Thu, 30 Oct 2008 09:04:48 -0400" -->
<!-- isosent="20081030130448" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="3EB9ADCB-7031-4133-96A6-CE4A39BE623B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5D01A33D-8D7D-4F3D-8344-6B96F3AE4917_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-30 09:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo,
<br>
<p>As Jeff mentioned this component is not required on Windows. You can  
<br>
disable it completely in Open MPI and everything will continue to work  
<br>
correctly. Please add --enable-mca-no-build=memory_mallopt o maybe the  
<br>
more generic (as there is no need for any memory manager on Windows -- 
<br>
enable-mca-no-build=memory.
<br>
<p>Just a word about performance. I think you already noticed how long  
<br>
the configure step is, and believe it is fast compared with building  
<br>
the whole Open MPI. However, once built, Open MPI (and most of Cygwin  
<br>
applications) only see their performance slightly affected by the fact  
<br>
they run on Cygwin. Even the network performances are correct.
<br>
<p>It is possible to have a native version of Open MPI on Windows. There  
<br>
are two ways to achieve this. First, install SFU, and compile there.  
<br>
It worked last time I checked, but it's not the solution I prefer.  
<br>
Second, you can install the express version of the Microsoft Visual  
<br>
Studio (which is free), and set your PATH, LIB and INCLUDE correctly  
<br>
to point to the installation, and then you can use the cl compiler to  
<br>
build Open MPI even on Windows.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Oct 30, 2008, at 8:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 29, 2008, at 4:31 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ugh.  IMHO, Cygwin != POSIX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that we're making the assumption that if dlsym() is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTLD_NEXT is defined.  I guess that's not true for cygwin (lame).   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we could also check for RTLD_NEXT...?  Is there any other OS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dlsym() is present by RTLD_NEXT is not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be easier to run Linux in a virtual machine on your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; windows host?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You'll probably get a lot better performance...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure RTLD_NEXT is part of the POSIX standard? I may be  
</span><br>
<span class="quotelev2">&gt;&gt; looking
</span><br>
<span class="quotelev2">&gt;&gt; in the wrong place, but apparently it is *not* part of the standard,
</span><br>
<span class="quotelev2">&gt;&gt; at least as defined here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html">http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough -- my words were ambiguous, and probably overly broad.   
</span><br>
<span class="quotelev1">&gt; I was trying to convey that my prior experience with Cygwin has  
</span><br>
<span class="quotelev1">&gt; biased me to believe that Cygwin tends to be &quot;different&quot; than other  
</span><br>
<span class="quotelev1">&gt; POSIX-like OSs, such as Linux, Solaris, and OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would seem that this is a GNU extension, so it becomes available
</span><br>
<span class="quotelev2">&gt;&gt; when __USE_GNU is defined. Now, looking at the cygwin version of
</span><br>
<span class="quotelev2">&gt;&gt; dlfcn.h, I see that RTDL_NEXT is *not* defined, but RTDL_LAZY,
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_NOW, RTLD_LOCAL and RTLD_GLOBAL, which makes it compliant with
</span><br>
<span class="quotelev2">&gt;&gt; POSIX, but not GNU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 'memory_mallopt_component.c' only checks if 'HAVE_DLSYM' is
</span><br>
<span class="quotelev2">&gt;&gt; defined. If so, it defines __USE_GNU then includes dlfcn.h. This is
</span><br>
<span class="quotelev2">&gt;&gt; ok, assuming you have a GNU version of dlfcn.h, but apparently this  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; not present in Cygwin...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood; this was a more complete/precise meaning for my question  
</span><br>
<span class="quotelev1">&gt; &quot;Is there any other OS where
</span><br>
<span class="quotelev1">&gt; dlsym() is present by RTLD_NEXT is not?&quot;  I suppose we can extend  
</span><br>
<span class="quotelev1">&gt; the configure test to check for RTLD_NEXT as well.  In this way,  
</span><br>
<span class="quotelev1">&gt; that component won't even decide to build itself.  You won't need  
</span><br>
<span class="quotelev1">&gt; this component, because it's only really useful for the OpenFabrics  
</span><br>
<span class="quotelev1">&gt; and [ancient] Myricom GM drivers in Open MPI, neither of which are  
</span><br>
<span class="quotelev1">&gt; likely to be supported in Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also FWIW, my understanding is that running another OS in a VM (such  
</span><br>
<span class="quotelev1">&gt; as Linux or your favorite BSD) will run *much* faster than Cygwin.   
</span><br>
<span class="quotelev1">&gt; I have dim recollections of LAM's and OMPI's &quot;configure&quot; script  
</span><br>
<span class="quotelev1">&gt; taking loooooong periods of time (I no longer have easy access to a  
</span><br>
<span class="quotelev1">&gt; Windows machine to do such testing).  Those with more Windows  
</span><br>
<span class="quotelev1">&gt; experience than me attributed it to Windows' process model  
</span><br>
<span class="quotelev1">&gt; implementation, which is quite different than Linux/Solaris/OSX/ 
</span><br>
<span class="quotelev1">&gt; etc.  So I'm just curious: do you have a reason for preferring  
</span><br>
<span class="quotelev1">&gt; Cygwin instead of a VM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7132/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
