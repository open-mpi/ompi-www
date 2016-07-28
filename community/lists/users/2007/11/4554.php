<?
$subject_val = "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 00:10:11 2007" -->
<!-- isoreceived="20071129051011" -->
<!-- sent="Thu, 29 Nov 2007 10:40:06 +0530" -->
<!-- isosent="20071129051006" -->
<!-- name="geetha r" -->
<!-- email="geethar4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)" -->
<!-- id="263540390711282110h1ca269f2vc27406605032e464_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DB07E060-FED2-46A5-A196-9B59F8894798_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)<br>
<strong>From:</strong> geetha r (<em>geethar4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 00:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4555.php">geetha r: "[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<li><strong>Previous message:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your reply,  i passed --disable-mpi-f77 option to
<br>
the configure script, but now the compiler failed with following reason.
<br>
<p>configure: error: Cannot support Fortran MPI_ADDRESS_KIND!
<br>
<p>&nbsp;&nbsp;can you pls let me know, how to get rid of this problem.( i.e what option
<br>
to pass)
<br>
<p>Thanks,
<br>
Geetha
<br>
<p><p>On 11/28/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your F77 compiler do not support array of LOGICAL variables (which
</span><br>
<span class="quotelev1">&gt; seems to be the case if you look in the config.log file), then you're
</span><br>
<span class="quotelev1">&gt; left with only one option. Remove the F77 support from the
</span><br>
<span class="quotelev1">&gt; compilation. This means adding the --disable-mpi-f77 option to the ./
</span><br>
<span class="quotelev1">&gt; configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2007, at 9:24 AM, geetha r wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;        Subject: &quot;Need exact command line for ./configure
</span><br>
<span class="quotelev2">&gt; &gt; {optionslist} &quot;  to build OPENMPI-1.2.4 on windows.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; while configuration script checking the FORTRAN77 compiler , iam
</span><br>
<span class="quotelev2">&gt; &gt; getting following error,so openmpi- build is unsuccessful on
</span><br>
<span class="quotelev2">&gt; &gt; windows(with configure script)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  checking for correct handling of FORTRAN logical arrays... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Error determining if arrays of logical values work
</span><br>
<span class="quotelev2">&gt; &gt; properly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i want to build, openmpi-1.2.4 (which is downloaded from MINGW), on
</span><br>
<span class="quotelev2">&gt; &gt; windows -2000 machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can somebody give proper build command i can use to &quot;build opennmpi
</span><br>
<span class="quotelev2">&gt; &gt; on windows-2000&quot; machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i.e
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ./configure  .......(options list)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can some body pls tell &quot;exact options to pass&quot; in the option list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; iam using cygwin to build openmpi on windows.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS:
</span><br>
<span class="quotelev2">&gt; &gt; I am attaching the output files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; config.log -&gt; actual log file.
</span><br>
<span class="quotelev2">&gt; &gt; config.out -&gt; output of the ./configure  file
</span><br>
<span class="quotelev2">&gt; &gt; make.out -&gt; fail because, configure build unsuccess on windows.
</span><br>
<span class="quotelev2">&gt; &gt; make.install-&gt; fail because, configure build unsuccess on windows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS: I am using all g77,g++,gcc from MINGW package.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i have downloaded and added g95 also, but which does not solve my
</span><br>
<span class="quotelev2">&gt; &gt; problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Geetha
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev2">&gt; &gt; ** WARNING:  This email contains an attachment of a very suspicious
</span><br>
<span class="quotelev2">&gt; &gt; type.  **
</span><br>
<span class="quotelev2">&gt; &gt; ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev2">&gt; &gt; absolutely     **
</span><br>
<span class="quotelev2">&gt; &gt; ** sure it is legitimate.  Opening this attachment may cause
</span><br>
<span class="quotelev2">&gt; &gt; irreparable   **
</span><br>
<span class="quotelev2">&gt; &gt; ** damage to your computer and your files.  If you have any
</span><br>
<span class="quotelev2">&gt; &gt; questions      **
</span><br>
<span class="quotelev2">&gt; &gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
</span><br>
<span class="quotelev2">&gt; &gt; OPENING IT. **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev2">&gt; &gt; ** This warning was added by the IU Computer Science Dept. mail
</span><br>
<span class="quotelev2">&gt; &gt; scanner.   **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; .install
</span><br>
<span class="quotelev2">&gt; &gt; .zip
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt; .out
</span><br>
<span class="quotelev2">&gt; &gt; .zip
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;
</span><br>
<span class="quotelev2">&gt; &gt; config
</span><br>
<span class="quotelev2">&gt; &gt; .out.zip&gt;&lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4555.php">geetha r: "[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!"</a>
<li><strong>Previous message:</strong> <a href="4553.php">Keshetti Mahesh: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4545.php">George Bosilca: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
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
