<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 14:09:27 2007" -->
<!-- isoreceived="20071002180927" -->
<!-- sent="Tue, 2 Oct 2007 14:09:12 -0400" -->
<!-- isosent="20071002180912" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Uh testbake runs" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2EDB_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 14:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm away from a computer right now so I don't have the specifics, but we saw some testbake results from UH today of mpich2 under slurm that were not run properly - it ran 16 copies of skampi instead of 1 16-node job, so the output was very skewed (and completely mis-parsed).
<br>
<p>Can you check your mpich2 compile / link settings to ensure that you're linking against the slurm pmi library properly?
<br>
<p>-jms
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
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
