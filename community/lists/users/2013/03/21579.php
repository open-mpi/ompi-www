<?
$subject_val = "Re: [OMPI users] mpirun error output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 01:45:19 2013" -->
<!-- isoreceived="20130321054519" -->
<!-- sent="Thu, 21 Mar 2013 02:45:14 -0300" -->
<!-- isosent="20130321054514" -->
<!-- name="Bruno Cramer" -->
<!-- email="bruno.cramer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error output" -->
<!-- id="CAME3KzCc6EPdVYQ6Sik9mDE1WUZShBbsk193Efwo=zzM9-TTLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D49162F1-716E-4D10-B5A3-A617D626B14A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error output<br>
<strong>From:</strong> Bruno Cramer (<em>bruno.cramer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 01:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Previous message:</strong> <a href="21578.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
thank you all for your help.
<br>
&quot;:&quot; was a typo that I did not see;-).  I also neglected to apply the 'make'
<br>
command in the example files to convert the **.c files in executable's. mpi
<br>
is running fine.
<br>
I
<br>
<p>Thank you
<br>
<p>mfg
<br>
Bruno
<br>
--------------------------------
<br>
<p><p><p>2013/3/20 Reuti &lt;reuti_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Am 20.03.2013 um 18:58 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, a couple of things come to mind - see below
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 20, 2013, at 9:41 AM, Bruno Cramer &lt;bruno.cramer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) Openmpi in PC1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I installed openmpi-1.4.3 using the  OpenSuse 32b v. 12.1  repository
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as well as openmpi devel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All mpi executables are present so are the libraries in lib directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I set the environment as ( .bashrc)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/bin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; export PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You should reverse the ordering here - always put the OMPI path element
</span><br>
<span class="quotelev1">&gt; first, then the existing one, to ensure that you are getting the intended
</span><br>
<span class="quotelev1">&gt; version. Lot of operating systems come with an older version pre-installed
</span><br>
<span class="quotelev1">&gt; in a standard location.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I run any of the test examples (eg. mpirun hello_c.c or any
</span><br>
<span class="quotelev1">&gt; program that has mpi interface included I get the message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; find an executable:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Executable: hello_c.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Node: linux-curie
</span><br>
<span class="quotelev3">&gt; &gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Look at the executable - apparently, you tried to run the &quot;.c&quot; source
</span><br>
<span class="quotelev1">&gt; code instead of the compiled executable :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; typing echo $LD_LIBRARY_PATH I should get something like
</span><br>
<span class="quotelev1">&gt; /usr/lib/mpi/gcc/openmpi/lib. The only output I get is
</span><br>
<span class="quotelev1">&gt; /usr/local/atlas3.10/lib (which is the blas/lapack library). Also Intel
</span><br>
<span class="quotelev1">&gt; compilers library is not shown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect that your original LD_LIBRARY_PATH was empty, so now the path
</span><br>
<span class="quotelev1">&gt; starts with a &quot;:&quot; and makes bash unhappy. Try reversing the order as above
</span><br>
<span class="quotelev1">&gt; and it might work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK additional colons don't matter, but nevertheless I prefer indeed for
</span><br>
<span class="quotelev1">&gt; cosmetic reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib/mpi/gcc/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to avoid a superfluous colon too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) Openmpi installation in PC2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In OpenSuse v 12.1 64b I installed openmpi-1.4.3 downloading it from
</span><br>
<span class="quotelev1">&gt; the openmpi site.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No error occured during ./configure, make,  make install process.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The environment settings change a little but are very similar to those
</span><br>
<span class="quotelev1">&gt; mentioned under PC1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The same message as above is occuring.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in this case typing echo $LD_LIBRARY_PATH I get the correct output from
</span><br>
<span class="quotelev1">&gt; the mpi library as /usr/local/lib64 and the executables are in
</span><br>
<span class="quotelev1">&gt; /usr/local/bin.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help is wellcome
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bruno
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Previous message:</strong> <a href="21578.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
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
