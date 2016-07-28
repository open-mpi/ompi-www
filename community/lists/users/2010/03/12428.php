<?
$subject_val = "Re: [OMPI users] mpi.h file is missing in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 07:04:17 2010" -->
<!-- isoreceived="20100325110417" -->
<!-- sent="Thu, 25 Mar 2010 12:03:56 +0100" -->
<!-- isosent="20100325110356" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h file is missing in openmpi" -->
<!-- id="E58DFFFD-1430-4629-974D-140745DF3F2F_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="60914.10.209.4.2.1269513009.squirrel_at_www.chem.iitb.ac.in" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h file is missing in openmpi<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 07:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12429.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Previous message:</strong> <a href="12427.php">G&#246;tz Waschk: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>In reply to:</strong> <a href="12426.php">sunita_at_[hidden]: "[OMPI users] mpi.h file is missing in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>Reply:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 25.03.2010 um 11:30 schrieb sunita_at_[hidden]:
<br>
<p><span class="quotelev1">&gt; Openmpi is installed in a Intel Xeon quad core 2.4Ghz machine loaded with
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux 5. The loaded openmpi version is 1.2.5. While
</span><br>
<span class="quotelev1">&gt; trying to install CHARMM software, it asked for the path of mpi.h file and
</span><br>
<span class="quotelev1">&gt; library files libmpi. I didn't find 'include' folder in the openmpi folder
</span><br>
<span class="quotelev1">&gt; which contains all the header files like mpi.h. However, it contains
</span><br>
<span class="quotelev1">&gt; 'bin', 'etc', 'lib' and 'share' sub-folders.
</span><br>
<p>maybe only the runtime package and not the developer package was installed. Due to the ancient version you have, I would suggest to download the actual source and install on your own with:
<br>
<p>$ ./configure --prefix=/home/patel/local/openmpi-1.4.1
<br>
<p>and after a &quot;make&quot; and &quot;make install&quot; you can access the actual header and library files. For CHARMM ist might be necessary to supply the path to the include files with -I/home/patel/local/openmpi-1.4.1/include in CFLAGS and the path to your libs in LDFLAGS -L/home/patel/local/openmpi-1.4.1/lib (names maybe different in CHARMM though).
<br>
<p>As long as you built the dynamic version, it's necessary to supply a runtime also an export LD_LIBRARY_PATH=/home/patel/local/openmpi-1.4.1/lib:$LD_LIBRARY_PATH
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like that mpi.h file does not exist. Which version of openmpi has
</span><br>
<span class="quotelev1">&gt; the mpi.h header file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dr. Sunita Patel
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; Visiting Fellow
</span><br>
<span class="quotelev1">&gt; Department of Chemical Sciences
</span><br>
<span class="quotelev1">&gt; T.I.F.R., Homi Bhabha Road, Colaba
</span><br>
<span class="quotelev1">&gt; Mumbai - 400005
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12429.php">Rolf Vandevaart: "Re: [OMPI users] Multi-rail support"</a>
<li><strong>Previous message:</strong> <a href="12427.php">G&#246;tz Waschk: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>In reply to:</strong> <a href="12426.php">sunita_at_[hidden]: "[OMPI users] mpi.h file is missing in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<li><strong>Reply:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
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
