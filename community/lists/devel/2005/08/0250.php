<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 11:19:30 2005" -->
<!-- isoreceived="20050826161930" -->
<!-- sent="Fri, 26 Aug 2005 18:19:28 +0200" -->
<!-- isosent="20050826161928" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050826161928.GE15310_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050826141806.GR1685_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-26 11:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Troy Benjegerdes wrote on Fri, Aug 26, 2005 at 04:18:06PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you manage to get this working on a debian system with just the
</span><br>
<span class="quotelev1">&gt; newer version of libtool? Jeff suggests I build libtool and all the
</span><br>
<span class="quotelev1">&gt; other autotools as well, but I'd like to see if I can avoid that, and
</span><br>
<span class="quotelev1">&gt; just update libtool.
</span><br>
<p>If you want to update libtool alone (and thus have it in a different
<br>
$prefix than the other autotools), you need to help aclocal to find
<br>
the new libtool macro files.
<br>
- either: everywhere where
<br>
&nbsp;&nbsp;&nbsp;aclocal
<br>
&nbsp;&nbsp;is executed in autogen.sh, you replace it with
<br>
&nbsp;&nbsp;&nbsp;aclocal -I$prefix_of_libtool_installation/share/aclocal
<br>
- or: in the normal directory where aclocal searches, add a file named
<br>
&nbsp;&nbsp;&quot;dirlist&quot; which lists other directories to be searched.  Note however,
<br>
&nbsp;&nbsp;that _these_ directories are searched _after_ the normal one, so if
<br>
&nbsp;&nbsp;you have libtool macros in both, a mixup will occur and you'll only
<br>
&nbsp;&nbsp;get angry.  :)
<br>
<p>(It would be good to augment the autogen.sh script so that it honored
<br>
a setting like ACLOCAL=&quot;path/to/aclocal -I ...&quot; (in Bourne shell speak)
<br>
and similarly for AUTOMAKE, AUTOCONF, LIBTOOLIZE).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0251.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<li><strong>Previous message:</strong> <a href="0249.php">Ralf Wildenhues: "Re:  configure hangs in libtool.."</a>
<li><strong>In reply to:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0252.php">Jeff Squyres: "Re:  OpenIB results"</a>
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
