<?
$subject_val = "[OMPI devel] btl_openib_component.c -- min_distance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 09:15:03 2009" -->
<!-- isoreceived="20090803131503" -->
<!-- sent="Mon, 03 Aug 2009 15:14:56 +0200" -->
<!-- isosent="20090803131456" -->
<!-- name="guillaume" -->
<!-- email="guillaume.mangeot_at_[hidden]" -->
<!-- subject="[OMPI devel] btl_openib_component.c -- min_distance" -->
<!-- id="1249305296.31945.54.camel_at_gui-desktop" -->
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
<strong>Subject:</strong> [OMPI devel] btl_openib_component.c -- min_distance<br>
<strong>From:</strong> guillaume (<em>guillaume.mangeot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 09:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm currently looking at the carto framework and the way it is used by
<br>
the openib btl. Looking at the code, I found this :
<br>
<p>1963        if(min_distance &lt; 0 || min_distance &lt; distance)
<br>
1964            min_distance = distance;
<br>
<p>at ompi/mca/btl/openib/btl_openib_component.c
<br>
<p>in the function:
<br>
1920 static int get_ib_dev_distance(struct ibv_device *dev)
<br>
<p><p>In this function, we seem to be computing distances between a given IB 
<br>
card and the processors included in our affinity. I don't know which 
<br>
strategy would be best here (i.e getting the min or the max), but I
<br>
think we should either rename min_distance to max_distance or replace
<br>
the &quot;&lt;&quot; sign by &quot;&gt;&quot;.
<br>
<p><p>Moreover this function is used later in the function:
<br>
1984 sort_devs_by_distance(struct ibv_device **ib_devs, int count)
<br>
to make an array of IB devices ascending sorted.
<br>
<p><p>Thanks.
<br>
<p>Guillaume
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6557.php">Mouhamed Gueye: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6555.php">Arthur Huillet: "[OMPI devel] [PATCH] Better error reporting when failing to load a component"</a>
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
