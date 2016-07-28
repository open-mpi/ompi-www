<?
$subject_val = "Re: [OMPI users] mpi.h file is missing in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 01:31:18 2010" -->
<!-- isoreceived="20100329053118" -->
<!-- sent="Mon, 29 Mar 2010 10:48:01 +0530 (IST)" -->
<!-- isosent="20100329051801" -->
<!-- name="sunita_at_[hidden]" -->
<!-- email="sunita_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h file is missing in openmpi" -->
<!-- id="52932.10.209.4.2.1269839881.squirrel_at_www.chem.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E58DFFFD-1430-4629-974D-140745DF3F2F_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> <a href="mailto:sunita_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpi.h%20file%20is%20missing%20in%20openmpi"><em>sunita_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-29 01:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12446.php">Jeff Squyres: "Re: [OMPI users] LAM: static"</a>
<li><strong>Previous message:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12428.php">Reuti: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>Thank you so much.
<br>
I installed openmpi locally from the source file. It has all header files
<br>
in the include folder. I could install charmm without any problem.
<br>
<p>Best regards,
<br>
Sunita
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 25.03.2010 um 11:30 schrieb sunita_at_[hidden]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi is installed in a Intel Xeon quad core 2.4Ghz machine loaded
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; Red Hat Enterprise Linux 5. The loaded openmpi version is 1.2.5. While
</span><br>
<span class="quotelev2">&gt;&gt; trying to install CHARMM software, it asked for the path of mpi.h file
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; library files libmpi. I didn't find 'include' folder in the openmpi
</span><br>
<span class="quotelev2">&gt;&gt; folder
</span><br>
<span class="quotelev2">&gt;&gt; which contains all the header files like mpi.h. However, it contains
</span><br>
<span class="quotelev2">&gt;&gt; 'bin', 'etc', 'lib' and 'share' sub-folders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maybe only the runtime package and not the developer package was
</span><br>
<span class="quotelev1">&gt; installed. Due to the ancient version you have, I would suggest to
</span><br>
<span class="quotelev1">&gt; download the actual source and install on your own with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/home/patel/local/openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and after a &quot;make&quot; and &quot;make install&quot; you can access the actual header and
</span><br>
<span class="quotelev1">&gt; library files. For CHARMM ist might be necessary to supply the path to the
</span><br>
<span class="quotelev1">&gt; include files with -I/home/patel/local/openmpi-1.4.1/include in CFLAGS and
</span><br>
<span class="quotelev1">&gt; the path to your libs in LDFLAGS -L/home/patel/local/openmpi-1.4.1/lib
</span><br>
<span class="quotelev1">&gt; (names maybe different in CHARMM though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as you built the dynamic version, it's necessary to supply a
</span><br>
<span class="quotelev1">&gt; runtime also an export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/patel/local/openmpi-1.4.1/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like that mpi.h file does not exist. Which version of openmpi
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev2">&gt;&gt; the mpi.h header file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Sunita Patel
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Visiting Fellow
</span><br>
<span class="quotelev2">&gt;&gt; Department of Chemical Sciences
</span><br>
<span class="quotelev2">&gt;&gt; T.I.F.R., Homi Bhabha Road, Colaba
</span><br>
<span class="quotelev2">&gt;&gt; Mumbai - 400005
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12446.php">Jeff Squyres: "Re: [OMPI users] LAM: static"</a>
<li><strong>Previous message:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12428.php">Reuti: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
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
