<?
$subject_val = "[OMPI devel] btl_openib_receive_queues mca param not always taken into account";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 06:08:14 2014" -->
<!-- isoreceived="20140711100814" -->
<!-- sent="Fri, 11 Jul 2014 12:04:25 +0200" -->
<!-- isosent="20140711100425" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] btl_openib_receive_queues mca param not always taken into account" -->
<!-- id="53BFB6A9.6020706_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] btl_openib_receive_queues mca param not always taken into account<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-11 06:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<li><strong>Reply:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I noticed that specifying the receive_queues through an mca param (-mca 
<br>
btl_openib_receive_queues ....) doesn't always override the 
<br>
mca-btl-openib-device-params.ini setting.
<br>
<p>If for whatever reason we want to bypass the 
<br>
mca-btl-openib-device-params.ini file setting for the receive_queues, we 
<br>
should be able to specify a value through an mca param.
<br>
But if the string provided in the mca param is the same as the default 
<br>
one (default_qps in btl_openib_register_mca_params()), this does not 
<br>
work: we still get the receive_queues from the .ini file.
<br>
<p>This is due to the way the 
<br>
mca_btl_openib_component.receive_queues_source (where did we get the 
<br>
receive_queues value from) is computed:
<br>
<p>1) in btl_openib_register_mca_params() we register 
<br>
btl_openib_receive_queues, providing default_qps as a default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value.
<br>
2) mca_btl_openib_component.receive_queues_source is set to 
<br>
BTL_OPENIB_RQ_SOURCE_MCA only if the registered string
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is different from default_qps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(if both strings are equal, the source is set to 
<br>
BTL_OPENIB_RQ_SOURCE_DEFAULT).
<br>
3) then, in init_one_device(), 
<br>
mca_btl_openib_component.receive_queues_source is checked:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. if its value is BTL_OPENIB_RQ_SOURCE_MCA, we bypass any other 
<br>
setting (this is the behaviour I expected)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. otherwise, we go on, getting the .ini file settings (this is the 
<br>
behaviour I got)
<br>
<p>I wanted to know if this behaviour is intentional and the reason for it.
<br>
If ever it is not, the attached trivial patch fixes it.
<br>
<p>Regards,
<br>
<p><pre>
-- 
Nadia Derbey

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15106/btl_openib_receive_queues.patch">btl_openib_receive_queues.patch</a>
</ul>
<!-- attachment="btl_openib_receive_queues.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
<li><strong>Reply:</strong> <a href="15329.php">Joshua Ladd: "Re: [OMPI devel] btl_openib_receive_queues mca param not always taken into account"</a>
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
