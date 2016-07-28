<?
$subject_val = "Re: [OMPI users] ompi_info hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 17:33:36 2008" -->
<!-- isoreceived="20081108223336" -->
<!-- sent="Sat, 8 Nov 2008 17:31:40 -0500" -->
<!-- isosent="20081108223140" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info hangs" -->
<!-- id="FF73A0A3-FA5B-48E7-95F5-65F8FF38D7E8_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="167AE7CC-2BA5-4A70-AAAE-24EF250AEE35_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info hangs<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-08 17:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7243.php">George Bosilca: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7243.php">George Bosilca: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, I have warning when running under debugger 'Lowest section in  
<br>
system-supplied DSO at 0xffffe000 is .hash at ffffe0b4'
<br>
The program hangs in _int_malloc():
<br>
<p>(gdb) run
<br>
Starting program: /opt/openmpi-1.2.7/bin/ompi_info
<br>
warning: Lowest section in system-supplied DSO at 0xffffe000 is .hash  
<br>
at ffffe0b4
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 0xf7b7d6d0 (LWP 16621)]
<br>
1.2.7
<br>
<p>Program received signal SIGINT, Interrupt.
<br>
[Switching to Thread 0xf7b7d6d0 (LWP 16621)]
<br>
0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen-pal.so.0
<br>
(gdb) where
<br>
#0  0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen-pal.so.0
<br>
#1  0xf7e544e1 in malloc () from /opt/openmpi/lib/libopen-pal.so.0
<br>
#2  0xf7db46c7 in operator new () from /usr/lib/libstdc++.so.6
<br>
#3  0xf7d8e121 in std::string::_Rep::_S_create () from /usr/lib/ 
<br>
libstdc++.so.6
<br>
#4  0xf7d8ee18 in std::string::_Rep::_M_clone () from /usr/lib/libstdc 
<br>
++.so.6
<br>
#5  0xf7d8fac8 in std::string::reserve () from /usr/lib/libstdc++.so.6
<br>
#6  0xf7d8ff6a in std::string::append () from /usr/lib/libstdc++.so.6
<br>
#7  0x08054f30 in ompi_info::out ()
<br>
#8  0x08062a33 in ompi_info::show_ompi_version ()
<br>
#9  0x080533a0 in main ()
<br>
<p>On Nov 8, 2008, at 12:33 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think we had a similar problem on the past. It has something to  
</span><br>
<span class="quotelev1">&gt; do with the atomics on this architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have access to such an architecture. Can you provide us a  
</span><br>
<span class="quotelev1">&gt; stack trace when this happens ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2008, at 12:14 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having problems building OMPI 1.2.7 on an Intel Xeon quad- 
</span><br>
<span class="quotelev2">&gt;&gt; core 64 bits server. The compilation completes but ompi_info hangs  
</span><br>
<span class="quotelev2">&gt;&gt; after printing the OMPI version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to run a few mpi applications on this same install and  
</span><br>
<span class="quotelev2">&gt;&gt; they do work fine. What can cause ompi_info to hang?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7245.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7243.php">George Bosilca: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>In reply to:</strong> <a href="7243.php">George Bosilca: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7258.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
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
