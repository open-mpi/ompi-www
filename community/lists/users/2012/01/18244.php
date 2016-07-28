<?
$subject_val = "Re: [OMPI users] rankfiles on really big nodes broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 09:05:17 2012" -->
<!-- isoreceived="20120123140517" -->
<!-- sent="Mon, 23 Jan 2012 15:05:12 +0100" -->
<!-- isosent="20120123140512" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfiles on really big nodes broken?" -->
<!-- id="4F1D6918.7070400_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8DFEAB8-1759-435C-8B8A-DF74EB162BBC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] rankfiles on really big nodes broken?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 09:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18245.php">jody: "[OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Previous message:</strong> <a href="18243.php">Venkateswara Rao Dokku: "[OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
Yes, the rankfiles in rankfiles128.tgz are the rankfiles which are used, 
<br>
and linuxbsc*.txt files contain the output produced.
<br>
<p>It would surprise me if the rankfile3 is incorrect - the very same files 
<br>
(exept the node name of course) rankfile1, rankfile2 worked on smaller 
<br>
machines, cf. runme.sh, the rankfile* files ant the output files.
<br>
<p>The behaviour &quot;it works on small box but does not work on thick box&quot; was 
<br>
the quell of mu assumption that there is a error somewhere..
<br>
<p>&nbsp;&nbsp;For the complete error message on the thick node see linuxbsc269.txt file.
<br>
<p>Updating to newer 1.5.x is a good idea; but it is always a bit 
<br>
tedious... Would 1.5.5 arrive the next time?
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I don't see anything in the code that limits the number of procs in a rankfile.
</span><br>
<span class="quotelev1"> &gt; Are the attached rankfiles the ones you are trying to use?
</span><br>
<span class="quotelev1">&gt; I'm wondering if there is a syntax error that is causing the problem. 
</span><br>
<span class="quotelev1">&gt; It would help if you could provide the complete error message output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At one time, there was a limit on the number of procs on a node - 
</span><br>
<span class="quotelev1"> &gt; nothing to do with rankfile. That was fixed, though, and there
</span><br>
<span class="quotelev1">&gt; is no real limit any more. I don't recall the precise release number
</span><br>
<span class="quotelev1">&gt; where it changed in the 1.5 series - you might try updating 
</span><br>
<span class="quotelev1">&gt; to 1.5.4 as I'm sure it doesn't exist there.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2012, at 12:43 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello, Open MPI developer!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, we have a really nice toy: 2 Tb RAM, 16 sockets, 128 cores.
</span><br>
<span class="quotelev2">&gt;&gt; (4x smaller Bull S6010 coupled by BCS chips to a single image machine)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a such big box, process pinning is vital.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we tried to use the Open MPI capabilities to pin te processes. But it seem that the rankfile infrastructure does not work properly: we always get &quot;Error: Invalid argument&quot; message on the 128-core node, also if the rankfile was OK.
</span><br>
<span class="quotelev2">&gt;&gt; On a smaller node (up to 32 cores/ 64 threads) the very same rankfile (with changed node name of course) works well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe, this computer dimension is a bit too big for the pinning infrasructure now. A bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. see the attached .tgz for some logzz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   Rankfiles
</span><br>
<span class="quotelev2">&gt;&gt;       Rankfiles provide a means for specifying detailed information about how process ranks should  be  mapped  to nodes and how they should be bound.  Consider the following:
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r24532
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Mar 16, 2011
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r24532
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL release date: Mar 16, 2011
</span><br>
<span class="quotelev2">&gt;&gt;            Ident string: 1.5.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rankfiles128.tgz&gt;_______________________________________________
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
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18244/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18245.php">jody: "[OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Previous message:</strong> <a href="18243.php">Venkateswara Rao Dokku: "[OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
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
