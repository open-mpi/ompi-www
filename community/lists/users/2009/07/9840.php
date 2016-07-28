<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:36:37 2009" -->
<!-- isoreceived="20090706143637" -->
<!-- sent="Mon, 6 Jul 2009 15:36:13 +0100" -->
<!-- isosent="20090706143613" -->
<!-- name="Catalin David" -->
<!-- email="catalindavid2003_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="d62c43c00907060736n7e19ac6fo904b20d6c058b416_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0907060726la8a9354p29e4b481c932bc37_at_mail.gmail.com" -->
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
<strong>From:</strong> Catalin David (<em>catalindavid2003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
<li><strong>Previous message:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 6, 2009 at 3:26 PM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Are you also sure that you have the same version of Open-MPI
</span><br>
<span class="quotelev1">&gt; on every machine of your cluster, and that it is the mpicxx of this
</span><br>
<span class="quotelev1">&gt; version that is called when you run your program?
</span><br>
<span class="quotelev1">&gt; I ask because you mentioned that there was an old version of Open-MPI
</span><br>
<span class="quotelev1">&gt; present... die you remove this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<p>Hi
<br>
<p>I have just logged in a few other boxes and they all mount my home
<br>
folder. When running `echo $LD_LIBRARY_PATH` and other commands, I get
<br>
what I expect to get, but this might be because I have set these
<br>
variables in the .bashrc file. So, I tried compiling/running like this
<br>
&nbsp;~/local/bin/mpicxx [stuff] and ~/local/bin/mpirun -np 4 ray-trace,
<br>
but I get the same errors.
<br>
<p>As for the previous version, I don't have root access, therefore I was
<br>
not able to remove it. I was just trying to outrun it by setting the
<br>
$PATH variable to point first at my local installation.
<br>
<p><p>Catalin
<br>
<p><p><pre>
-- 
******************************
Catalin David
B.Sc. Computer Science 2010
Jacobs University Bremen
Phone: +49-(0)1577-49-38-667
College Ring 4, #343
Bremen, 28759
Germany
******************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
<li><strong>Previous message:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
