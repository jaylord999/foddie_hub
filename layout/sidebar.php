<?php
?>
<style>
    /* Main Container */
.main-container {
    display: flex;
    flex-direction: column;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

.content {
    flex: 1;
    padding-right: 0;
    margin-bottom: 20px;
}

.sidebar {
    width: 100%;
    background-color: rgb(252, 247, 250);
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.cta-button {
    display: block;
    background-color: #f5f7fa;
    color: rgb(17, 15, 15);
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin: 10px 0;
    text-align: center;
}

.cta-button:hover {
    background-color: #c5d3e2;
}

/* Media query for tablets and larger screens */
@media screen and (min-width: 768px) {
    .main-container {
        flex-direction: row;
    }

    .content {
        flex: 3;
        padding-right: 20px;
    }

    .sidebar {
        width: 250px;
        margin-left: 20px;
    }
}

/* Media query for larger desktop screens */
@media screen and (min-width: 1200px) {
    .sidebar {
        width: 300px;
    }
}

</style>
<aside class="sidebar">
    <div class="related-topics">
        <h3>Related Topics</h3>
        <a href="#" class="cta-button">How to Create a Sustainable Weight Loss Plan</a>
        <a href="#" class="cta-button">Top 10 Weight Management Myths</a>
        <a href="#" class="cta-button">The Benefits of Strength Training</a>
        <a href="#" class="cta-button">Nutrition Basics for Effective Weight Management</a>
        <a href="#" class="cta-button">Understanding the Role of Sleep in Weight Loss</a>
        <a href="#" class="cta-button">Mindful Eating: A Key to Long-Term Weight Control</a>
        <a href="#" class="cta-button">Overcoming Emotional Eating Habits</a>
        <a href="#" class="cta-button">The Impact of Stress on Weight and How to Manage It</a>
    </div>
</aside>
    </div>
