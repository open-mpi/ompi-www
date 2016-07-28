<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:26:43 2009" -->
<!-- isoreceived="20090706142643" -->
<!-- sent="Mon, 6 Jul 2009 16:26:38 +0200" -->
<!-- isosent="20090706142638" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="9b0da5ce0907060726la8a9354p29e4b481c932bc37_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d62c43c00907060624p3dfe92d8v75271ec0c4890ae8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Are you also sure that you have the same version of Open-MPI
<br>
on every machine of your cluster, and that it is the mpicxx of this
<br>
version that is called when you run your program?
<br>
I ask because you mentioned that there was an old version of Open-MPI
<br>
present... die you remove this?
<br>
<p>Jody
<br>
<p>On Mon, Jul 6, 2009 at 3:24 PM, Catalin David&lt;catalindavid2003_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 6, 2009 at 2:14 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //Initialize step
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //Here it breaks!!! Memory allocation issue!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;pool);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::cout&lt;&lt;&quot;I'm here&quot;&lt;&lt;std::endl; //this statement is never reached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When trying to debug via gdb, the problem seems to be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xb7524772 in ompi_comm_invalid (comm=Could not find the frame base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for &quot;ompi_comm_invalid&quot;.) at communicator.h:261
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 261 &#160; &#160; communicator.h: No such file or directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160;in communicator.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which might indicate a problem with paths. For now, my LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is set to &quot;/users/cluster/cdavid/local/lib/&quot; (the local folder in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home folder emulates the directory structure of the / folder).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and your PATH is also okay? (I see that you use plain mpicxx in the build)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the output of some commands in the terminal:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cdavid_at_denali:~$ which mpicxx
</span><br>
<span class="quotelev1">&gt; ~/local/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; cdavid_at_denali:~$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /users/cluster/cdavid/local/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/opt/scali/bin:/opt/scali/sbin:/opt/scali/contrib/pbs/bin:/users/cluster/cdavid/bin
</span><br>
<span class="quotelev1">&gt; cdavid_at_denali:~$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /users/cluster/cdavid/local/lib/
</span><br>
<span class="quotelev1">&gt; cdavid_at_denali:~$ locate communicator.h
</span><br>
<span class="quotelev1">&gt; cdavid_at_denali:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see anything wrong with the path (I added the first part in
</span><br>
<span class="quotelev1">&gt; order to make it look there first). I even tried adding
</span><br>
<span class="quotelev1">&gt; &quot;-L/users/cluster/cdavid/local/lib -lmpi
</span><br>
<span class="quotelev1">&gt; -I/users/cluster/cdavid/local/include&quot; to the compiler invocation, in
</span><br>
<span class="quotelev1">&gt; hope of an improvement. So far, nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Catalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ******************************
</span><br>
<span class="quotelev1">&gt; Catalin David
</span><br>
<span class="quotelev1">&gt; B.Sc. Computer Science 2010
</span><br>
<span class="quotelev1">&gt; Jacobs University Bremen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +49-(0)1577-49-38-667
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; College Ring 4, #343
</span><br>
<span class="quotelev1">&gt; Bremen, 28759
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; ******************************
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
<li><strong>Next message:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9838.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
