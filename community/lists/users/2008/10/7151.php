<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 06:51:10 2008" -->
<!-- isoreceived="20081031105110" -->
<!-- sent="Fri, 31 Oct 2008 06:51:01 -0400" -->
<!-- isosent="20081031105101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="A493DF4D-3DFF-46E4-8C90-D3771527379D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71ec5a370810310248g91a4d9ftca708e6e6306d0c9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 06:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7152.php">Matthias Hovestadt: "[OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI that ships with Leopard does not include Fortran support  
<br>
because OS X does not ship with a Fortran compiler (this was Apple's  
<br>
decision, not ours).  If you have Fortran MPI applications, you'll  
<br>
need to a) download and install your own Fortran compiler (e.g., <a href="http://hpc.sf.net/">http://hpc.sf.net/</a>) 
<br>
, and b) install your own copy Open MPI that includes Fortran support  
<br>
(e.g., install it to /opt/openmpi or somesuch -- I do not recommend  
<br>
installing it over the system-installed Open MPI).
<br>
<p>Once you do this, mpif90 should work as expected, and statements like  
<br>
&quot;use mpi&quot; or &quot;include &quot;mpifh.&quot;&quot; should function properly.
<br>
<p><p>On Oct 31, 2008, at 5:48 AM, Benjamin Lamptey wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt; I have to be more specific with my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I am using the Mac OS X (Leopard) operating system.
</span><br>
<span class="quotelev1">&gt; When I do uname -a, I get Darwin Kernel Version 9.5.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) My code if fortran 90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) I tried using the mpif90 wrapper and I got the following message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) I have the g95 compiler installed. So when I try using the
</span><br>
<span class="quotelev1">&gt; g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following mesage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt; g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/ 
</span><br>
<span class="quotelev1">&gt; blag_real_burnmpi.f90
</span><br>
<span class="quotelev1">&gt; Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev1">&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev1">&gt; xxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) What are people's experience in this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey  
</span><br>
<span class="quotelev1">&gt; &lt;bllamptey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally  
</span><br>
<span class="quotelev1">&gt; &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
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
<li><strong>Next message:</strong> <a href="7152.php">Matthias Hovestadt: "[OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Previous message:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7150.php">Benjamin Lamptey: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
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
