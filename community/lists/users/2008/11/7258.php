<?
$subject_val = "Re: [OMPI users] ompi_info hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 13:44:36 2008" -->
<!-- isoreceived="20081110184436" -->
<!-- sent="Mon, 10 Nov 2008 13:44:27 -0500" -->
<!-- isosent="20081110184427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info hangs" -->
<!-- id="F49EEBA9-3B70-4093-AE5E-BE04BA32191C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FF73A0A3-FA5B-48E7-95F5-65F8FF38D7E8_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 13:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7259.php">Brock Palen: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7244.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're not using OpenFabrics-based networks, try configuring Open  
<br>
MPI --without-memory-manager and see if that fixes your problems.
<br>
<p><p>On Nov 8, 2008, at 5:31 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; George, I have warning when running under debugger 'Lowest section  
</span><br>
<span class="quotelev1">&gt; in system-supplied DSO at 0xffffe000 is .hash at ffffe0b4'
</span><br>
<span class="quotelev1">&gt; The program hangs in _int_malloc():
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /opt/openmpi-1.2.7/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; warning: Lowest section in system-supplied DSO at 0xffffe000  
</span><br>
<span class="quotelev1">&gt; is .hash at ffffe0b4
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev1">&gt; 1.2.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0xf7b7d6d0 (LWP 16621)]
</span><br>
<span class="quotelev1">&gt; 0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0xf7e5267e in _int_malloc () from /opt/openmpi/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0xf7e544e1 in malloc () from /opt/openmpi/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0xf7db46c7 in operator new () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #3  0xf7d8e121 in std::string::_Rep::_S_create () from /usr/lib/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #4  0xf7d8ee18 in std::string::_Rep::_M_clone () from /usr/lib/ 
</span><br>
<span class="quotelev1">&gt; libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #5  0xf7d8fac8 in std::string::reserve () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #6  0xf7d8ff6a in std::string::append () from /usr/lib/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; #7  0x08054f30 in ompi_info::out ()
</span><br>
<span class="quotelev1">&gt; #8  0x08062a33 in ompi_info::show_ompi_version ()
</span><br>
<span class="quotelev1">&gt; #9  0x080533a0 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2008, at 12:33 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we had a similar problem on the past. It has something to  
</span><br>
<span class="quotelev2">&gt;&gt; do with the atomics on this architecture.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have access to such an architecture. Can you provide us a  
</span><br>
<span class="quotelev2">&gt;&gt; stack trace when this happens ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2008, at 12:14 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having problems building OMPI 1.2.7 on an Intel Xeon quad- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core 64 bits server. The compilation completes but ompi_info hangs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after printing the OMPI version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to run a few mpi applications on this same install and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they do work fine. What can cause ompi_info to hang?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7259.php">Brock Palen: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7244.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Reply:</strong> <a href="7270.php">Robert Kubrick: "Re: [OMPI users] ompi_info hangs"</a>
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
