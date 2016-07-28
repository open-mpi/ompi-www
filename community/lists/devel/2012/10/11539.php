<?
$subject_val = "Re: [OMPI devel] git tree mirror: I give up :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 16:22:42 2012" -->
<!-- isoreceived="20121001202242" -->
<!-- sent="Mon, 1 Oct 2012 16:22:35 -0400" -->
<!-- isosent="20121001202235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] git tree mirror: I give up :-(" -->
<!-- id="7BF4F197-2ED3-44E0-B205-7383C25C6DFD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A3338294-D56F-4DA3-BAA4-063E084B9A38_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] git tree mirror: I give up :-(<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 16:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice pinged me off list and said he *might* have a look at this later this week.  
<br>
<p>In case anyone else might be interested in taking over the git SVN mirror, here's a history of what has been done:
<br>
<p>1. Eugene Voronov at Mellanox kindly provided 2 scripts that were the foundation for what I did in the git mirror.  The final versions of them are attached:
<br>
<p>&nbsp;&nbsp;&nbsp;- make-git-clone.sh: made the initial git clone of the SVN tree
<br>
&nbsp;&nbsp;&nbsp;- update-git-svn.sh: run every 30 mins to pull from SVN, merge to all the relevant branches, and push to github
<br>
&nbsp;&nbsp;&nbsp;- authors.txt: a file I made with all the SVN IDs and committer names (made via svn log + scripting + manual tweaks).  You'll need this file to run the above 2 scripts.
<br>
<p>2. To be honest, I don't fully understand the git-ness of what these 2 scripts are doing (which is why I'm giving this up).  
<br>
<p>3. The update script has been run via cron for several weeks and mysteriously stopped working (with a set of errors -- see attached) this past Friday.  All updates since then have (predictably) failed because git is in the middle of a failed merge.
<br>
<p>4. For anyone who wants to take this stuff over, I'm happy to share the local tree that I was using for the pulling-from-SVN and pushing-to-github, or you can feel free to re-create the tree yourself.  I'm also happy to give whatever access you need to the OMPI organization on github.
<br>
<p><p><p>On Oct 1, 2012, at 2:41 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The git SVN mirror keeps breaking.  :-(  Sometime starting this past Friday, something broke again, and I just don't have the knowledge or time to fix it again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does someone else want to maintain this?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's nothing to maintain on www.open-mpi.org -- the goal is simply to maintain the git mirror on github.com.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If no one wants to maintain it, I'll pull it down.  Let me know; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>



</pre>
<p>
abbyz = Abhishek Kulkarni &lt;abbyz_at_[hidden]&gt;
<br>
adi = Adrian Knoth &lt;adi_at_[hidden]&gt;
<br>
adkulkar = Abhishek Kulkarni &lt;adkulkar_at_[hidden]&gt;
<br>
afriedle = Andrew Friedley &lt;afriedle_at_[hidden]&gt;
<br>
angskun = Thara Angskun &lt;angskun_at_[hidden]&gt;
<br>
Anya = Anya Tatashina &lt;Anya_at_[hidden]&gt;
<br>
apant = Avneesh Pant &lt;apant_at_[hidden]&gt;
<br>
bbenton = Brad Bento &lt;bbenton_at_[hidden]&gt;
<br>
bosilca = George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
bouteill = Aurelien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
brbarret = Brian Barrett &lt;brbarret_at_[hidden]&gt;
<br>
casswell = Laura Casswell &lt;casswell_at_[hidden]&gt;
<br>
coti = Camille Coti &lt;coti_at_[hidden]&gt;
<br>
csbell = Christian Bell &lt;csbell_at_[hidden]&gt;
<br>
cyeoh = Chris Yeoh &lt;cyeoh_at_[hidden]&gt;
<br>
damico = Bill D'Amico &lt;damico_at_[hidden]&gt;
<br>
ddd = David Daniel &lt;ddd_at_[hidden]&gt;
<br>
derbeyn = Nadia Derby &lt;derbeyn_at_[hidden]&gt;
<br>
dgdimick = Denis Dimick &lt;dgdimick_at_[hidden]&gt;
<br>
dkerr = Donald Kerr &lt;dkerr_at_[hidden]&gt;
<br>
dlacher = Dan Lacher &lt;dlacher_at_[hidden]&gt;
<br>
dorons = Doron Shoham &lt;dorons_at_[hidden]&gt;
<br>
edgar = Edgar Gabriel &lt;edgar_at_[hidden]&gt;
<br>
emallove = Ethan Mallove &lt;emallove_at_[hidden]&gt;
<br>
eugene = Eugene Loh &lt;eugene_at_[hidden]&gt;
<br>
gef = Graham Fagg &lt;gef_at_[hidden]&gt;
<br>
gingery = Ginger Young &lt;gingery_at_[hidden]&gt;
<br>
gleb = Gleb Natapov &lt;gleb_at_[hidden]&gt;
<br>
gshipman = Galen Shipman &lt;gshipman_at_[hidden]&gt;
<br>
gwatson = Greg Watson &lt;gwatson_at_[hidden]&gt;
<br>
herault = Thomas Herault &lt;herault_at_[hidden]&gt;
<br>
hjelmn = Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
<br>
hpcstork = Sven Stork &lt;hpcstork_at_[hidden]&gt;
<br>
htor = Torsten Hoefler &lt;htor_at_[hidden]&gt;
<br>
igb = Ian Bason &lt;igb_at_[hidden]&gt;
<br>
jdmason = John Mason &lt;jdmason_at_[hidden]&gt;
<br>
jjhursey = Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
jnysal = Nyal Jan &lt;jnysal_at_[hidden]&gt;
<br>
jsquyres = Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
jurenz = Matthias Jurenz &lt;jurenz_at_[hidden]&gt;
<br>
karenn = Karen Norteman &lt;karenn_at_[hidden]&gt;
<br>
kliteyn = Yevgeny  &lt;kliteyn_at_[hidden]&gt;
<br>
kmroz = Karl Mroz &lt;kmroz_at_[hidden]&gt;
<br>
knuepfer = Andreas Knuepfer &lt;knuepfer_at_[hidden]&gt;
<br>
koenig = Greg Koenig &lt;koenig_at_[hidden]&gt;
<br>
lemarini = Pierre Lemariner &lt;lemarini_at_[hidden]&gt;
<br>
lennyve = Lenny Verkhovsky &lt;lennyve_at_[hidden]&gt;
<br>
lums = Andrew Lumsdaine &lt;lums_at_[hidden]&gt;
<br>
matney = Ken Matney &lt;matney_at_[hidden]&gt;
<br>
miked = Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
mitch = Mitch Sukalski &lt;mitch_at_[hidden]&gt;
<br>
mschaara = Mohama Chaarawi &lt;mschaara_at_[hidden]&gt;
<br>
mt = Mark Taylor &lt;mt_at_[hidden]&gt;
<br>
ollie = Li-Ta Lo &lt;ollie_at_[hidden]&gt;
<br>
paklui = Pak Lui &lt;paklui_at_[hidden]&gt;
<br>
pasha = Pavel Shamis &lt;pasha_at_[hidden]&gt;
<br>
patrick = Patrick Geoffray &lt;patrick_at_[hidden]&gt;
<br>
penoff = Brad Penoff &lt;penoff_at_[hidden]&gt;
<br>
pjesa = Jelena Pjesivac-Grbovic &lt;pjesa_at_[hidden]&gt;
<br>
pkambadu = Prabhanjan Kambadur &lt;pkambadu_at_[hidden]&gt;
<br>
rasmussn = Craid Rasmussen &lt;rasmussn_at_[hidden]&gt;
<br>
rbbrigh = Ron Brightwell &lt;rbbrigh_at_[hidden]&gt;
<br>
rhc = Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
rlgraham = Rich Graham &lt;rlgraham_at_[hidden]&gt;
<br>
rolfv = Rolf Vandevaart &lt;rolfv_at_[hidden]&gt;
<br>
rta = Row Awles &lt;rta_at_[hidden]&gt;
<br>
rusraink = Rainer Keller &lt;rusraink_at_[hidden]&gt;
<br>
sami = Sami Ayyorgun &lt;sami_at_[hidden]&gt;
<br>
samuel = Samuel K. Gutierrez &lt;samuel_at_[hidden]&gt;
<br>
santhana = Gopal Santhanaraman &lt;santhana_at_[hidden]&gt;
<br>
sboehm = Swen Boehm &lt;sboehm_at_[hidden]&gt;
<br>
sharonm = Sharon Melamed &lt;sharonm_at_[hidden]&gt;
<br>
shiqing = Shiqing Fan &lt;shiqing_at_[hidden]&gt;
<br>
sjeaugey = Sylvain Jeuagey &lt;sjeaugey_at_[hidden]&gt;
<br>
surs = Sayantan Sur &lt;surs_at_[hidden]&gt;
<br>
sushant = Sushant Sharma &lt;sushant_at_[hidden]&gt;
<br>
swise = Steve Wise &lt;swise_at_[hidden]&gt;
<br>
tdd = Terry Dontje &lt;tdd_at_[hidden]&gt;
<br>
timattox = Tim Mattox &lt;timattox_at_[hidden]&gt;
<br>
tprins = Tim Prins &lt;tprins_at_[hidden]&gt;
<br>
twoodall = Tim Woodall &lt;twoodall_at_[hidden]&gt;
<br>
vasily = Vasily Filipov &lt;vasily_at_[hidden]&gt;
<br>
vsahay = Vishal Sahay &lt;vsahay_at_[hidden]&gt;
<br>
vvenkatesan = Vishwanath Venkatesan &lt;vvenkatesan_at_[hidden]&gt;
<br>
wbland = Wesley Bland &lt;wbland_at_[hidden]&gt;
<br>
yaeld = Yael Dalen &lt;yaeld_at_[hidden]&gt;
<br>
yuw = Weikuan Yu &lt;yuw_at_[hidden]&gt;
<br>
manjugv = Manjunath Gorentla Venkata &lt;manjugv_at_[hidden]&gt;
<br>
alekseys = Aleksey Senin &lt;alekseys_at_[hidden]&gt;
<br>
(no author) = Unknown &lt;unknown_at_[hidden]&gt;
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11539/make-git-clone.sh">make-git-clone.sh</a>
</ul>
<!-- attachment="make-git-clone.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11539/update-git-svn.sh">update-git-svn.sh</a>
</ul>
<!-- attachment="update-git-svn.sh" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11539/first-fail.txt.bz2">first-fail.txt.bz2</a>
</ul>
<!-- attachment="first-fail.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11539/subsequent-fails.txt.bz2">subsequent-fails.txt.bz2</a>
</ul>
<!-- attachment="subsequent-fails.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Previous message:</strong> <a href="11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>In reply to:</strong> <a href="11538.php">Jeff Squyres: "[OMPI devel] git tree mirror: I give up :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
<li><strong>Reply:</strong> <a href="11540.php">Bert Wesarg: "Re: [OMPI devel] git tree mirror: I give up :-("</a>
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
