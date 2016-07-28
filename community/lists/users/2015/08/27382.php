<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 11:09:59 2015" -->
<!-- isoreceived="20150802150959" -->
<!-- sent="Mon, 3 Aug 2015 00:09:58 +0900" -->
<!-- isosent="20150802150958" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="CAAkFZ5sXwF1W47BCHxTJ2_AXYOHpfHZtq67c21TMBDTEjQh4tA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+DemH-jL4M_Ou936DxGQmGL4Dj-S9nDDCRH7_vD4QiLySERVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] having an issue with paralleling jobs<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-02 11:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27381.php">Bennet Fauber: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is a good sign, it means orted was started on both nodes
<br>
strictly speaking, you should confirm both nodes appear 16 times each in
<br>
the output,
<br>
do you can draw any firm conclusion
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, August 3, 2015, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I wrote 2 new node names(which I had not used before) in &quot;myhostfile&quot;.
</span><br>
<span class="quotelev1">&gt; And when I run it from login terminal, it says:
</span><br>
<span class="quotelev1">&gt; *Warning: Permanently added 'cx1055,10.1.5.35' (RSA) to the list of known
</span><br>
<span class="quotelev1">&gt; hosts.*
</span><br>
<span class="quotelev1">&gt; *Warning: Permanently added 'cx1071,10.1.5.51' (RSA) to the list of known
</span><br>
<span class="quotelev1">&gt; hosts.*
</span><br>
<span class="quotelev1">&gt; *     &lt;output_data&gt;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it ok to conclude about both node usage ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 8:19 PM, Bennet Fauber &lt;bennet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','bennet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 2, 2015 at 10:47 AM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','abhisek.mndl_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;/mpirun --hostfile myhostfile -np 32 hostname
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27379.php">http://www.open-mpi.org/community/lists/users/2015/08/27379.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Research Fellow*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Structural Biology and Bioinformatics*
</span><br>
<span class="quotelev1">&gt; *Indian Institute of Chemical Biology*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Kolkata 700032*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *INDIA*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27382/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>Previous message:</strong> <a href="27381.php">Bennet Fauber: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] having an issue with paralleling jobs"</a>
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
